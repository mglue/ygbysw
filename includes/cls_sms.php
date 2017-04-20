<?php
/**
 * <短信宝www.smsbao.com>短信模块
 * Created by PhpStorm.
 * User: 苗高林
 * Date: 2017/4/20
 * Time: 19:46
 */


if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

require_once(ROOT_PATH . 'includes/cls_transport.php');
require_once(ROOT_PATH . 'includes/shopex_json.php');

/* 短信模块主类 */
class sms
{
    /**
     * 存放提供远程服务的URL。
     *
     * @access  private
     * @var     array       $api_urls
     */
    var $api_urls   = array(
        'info'              =>      'http://api.smsbao.com/sms',
        'send'              =>      'http://api.smsbao.com/sms',
        'servertime'        =>      'http://api.smsbao.com/sms'

    );
    /**
     * 存放MYSQL对象
     *
     * @access  private
     * @var     object      $db
     */
    var $db         = null;

    /**
     * 存放ECS对象
     *
     * @access  private
     * @var     object      $ecs
     */
    var $ecs        = null;

    /**
     * 存放transport对象
     *
     * @access  private
     * @var     object      $t
     */
    var $t          = null;

    /**
     * 存放程序执行过程中的错误信息，这样做的一个好处是：程序可以支持多语言。
     * 程序在执行相关的操作时，error_no值将被改变，可能被赋为空或大等0的数字.
     * 为空或0表示动作成功；大于0的数字表示动作失败，该数字代表错误号。
     *
     * @access  public
     * @var     array       $errors
     */
    var $errors  = array('api_errors'       => array('error_no' => -1, 'error_msg' => ''),
        'server_errors'    => array('error_no' => -1, 'error_msg' => ''));

    /**
     * 构造函数
     *
     * @access  public
     * @return  void
     */
    function __construct()
    {
        $this->sms();
    }

    /**
     * 构造函数
     *
     * @access  public
     * @return  void
     */
    function sms()
    {
        /* 由于要包含init.php，所以这两个对象一定是存在的，因此直接赋值 */
        $this->db = $GLOBALS['db'];
        $this->ecs = $GLOBALS['ecs'];

        /* 此处最好不要从$GLOBALS数组里引用，防止出错 */
        $this->t = new transport(-1, -1, -1, false);
        $this->json    = new Services_JSON;
    }

    /* 发送短消息
    *
    * @access  public
    * @param   string  $phone          要发送到哪些个手机号码，传的值是一个数组
    * @param   string  $msg            发送的消息内容
    */
    function send($phones,$msg,$send_date = '', $send_num = 1,$sms_type='',$version='1.0')
    {

        /* 检查发送信息的合法性 */
        $contents=$this->get_contents($phones, $msg);

        if(!$contents)
        {
            $this->errors['server_errors']['error_no'] = 3;//发送的信息有误
            return false;
        }

        $login_info = $this->getSmsInfo();
        if (!$login_info)
        {
            $this->errors['server_errors']['error_no'] = 5;//无效的身份信息

            return false;
        }

        /* 获取API URL */
        $sms_url = $this->get_url('send');

        if (!$sms_url)
        {
            $this->errors['server_errors']['error_no'] = 6;//URL不对

            return false;
        }

        foreach ($contents as $key=>$val)
        {
            $send_str['u'] = $login_info['sms_shop_mobile'];//短信宝账号
            $send_str['p'] = md5($login_info['sms_shop_pwd']);//短信宝密码
            $send_str['m'] = $val['phones'];
            $send_str['c'] = $login_info['sms_sign'].$val['content'];

            $sms_url= $this->get_url('send');
            /* 发送HTTP请求 */
            $send_url = $sms_url.'?'.http_build_query($send_str);
            $result =file_get_contents($send_url) ;
            sleep(1);
        }

       if($result == 0){ //返回0表示无错误
           echo $this->getErrorMsg($result);
           return true;
       }else{
           return false;
       }
    }




    /**
     * 检测启用短信服务需要的信息
     *
     * @access  private
     * @param   string      $email          邮箱
     * @param   string      $password       密码
     * @return  boolean                     如果启用信息格式合法就返回true，否则返回false。
     */
    function check_enable_info($email, $password)
    {
        if (empty($email) || empty($password))
        {
            return false;
        }

        return true;
    }

    //查询是否已有通行证
    function has_registered()
    {
        $sql = 'SELECT `value`
                FROM ' . $this->ecs->table('shop_config') . "
                WHERE `code` = 'ent_id'";

        $result = $this->db->getOne($sql);

        if (empty($result))
        {
            return false;
        }

        return true;
    }
    function get_site_info()
    {
        /* 获得当前处于会话状态的管理员的邮箱 */
        $email = $this->get_admin_email();
        $email = $email ? $email : '';
        /* 获得当前网店的域名 */
        $domain = $this->ecs->get_domain();
        $domain = $domain ? $domain : '';
        /* 赋给smarty模板 */
        $sms_site_info['email'] = $email;
        $sms_site_info['domain'] = $domain;

        return $sms_site_info;
    }
    function get_site_url()
    {
        $url = $this->ecs->url();
        $url = $url ? $url : '';
        return $url;
    }
    /**
     * 获得当前处于会话状态的管理员的邮箱
     *
     * @access  private
     * @return  string or boolean       成功返回管理员的邮箱，否则返回false。
     */
    function get_admin_email()
    {
        $sql = 'SELECT `email` FROM ' . $this->ecs->table('admin_user') . " WHERE `user_id` = '" . $_SESSION['admin_id'] . "'";
        $email = $this->db->getOne($sql);

        if (empty($email))
        {
            return false;
        }

        return $email;
    }
    //用户短信账户信息获取
    function getSmsInfo(){
        $sql = 'SELECT `code`, `value`
                FROM ' . $this->ecs->table('shop_config') . "
                WHERE `code` in ('sms_shop_pwd', 'sms_shop_mobile', 'sms_sign')";
        $sms_account = $this->db->getAll($sql);
        $rows = array();
        foreach ($sms_account as $val){
            $rows[$val['code']] = $val['value'];
        }
        if(empty($rows)){
            $this->errors['server_errors']['error_no'] = 12;//短信宝账号和密码没有填写
        }
        return $rows;
    }

    //检查手机号和发送的内容并生成生成短信队列
    function get_contents($phones,$msg)
    {
        if (empty($phones) || empty($msg))
        {
            return false;
        }
        $msg.= $GLOBALS['_CFG']['default_sms_sign'];

        $phone_key=0;
        $phones=explode(',',$phones);
        foreach($phones as $key => $value)
        {

            if($this->is_moblie($value))
            {
                $phone[$phone_key][]=$value;
            }
            else
            {
                $phone_key--;
            }
            $phone_key++;
        }

        if(!empty($phone))
        {
            foreach($phone as $phone_key => $val)
            {
                if (EC_CHARSET != 'utf-8')
                {
                    $phone_array[$phone_key]['phones']=implode(',',$val);
                    $phone_array[$phone_key]['content']=iconv('gb2312','utf-8',$msg);
                }
                else
                {
                    $phone_array[$phone_key]['phones']=implode(',',$val);
                    $phone_array[$phone_key]['content']=$msg;
                }

            }
            return $phone_array;
        }
        else
        {
            return false;
        }

    }


    /**
     * 返回指定键名的URL
     *
     * @access  public
     * @param   string      $key        URL的名字，即数组的键名
     * @return  string or boolean       如果由形参指定的键名对应的URL值存在就返回该URL，否则返回false。
     */
    function get_url($key)
    {
        $url = $this->api_urls[$key];

        if (empty($url))
        {
            return false;
        }

        return $url;
    }
    /**
     * 检测手机号码是否正确
     *
     */
    function is_moblie($moblie)
    {
        return  preg_match("/^1[34578]\d{9}$/", $moblie);
    }

    //加密算法
    function make_shopex_ac($temp_arr,$token)
    {
        ksort($temp_arr);
        $str = '';
        foreach($temp_arr as $key=>$value)
        {
            if($key!='certi_ac')
            {
                $str.= $value;
            }
        }
        return strtolower(md5($str.strtolower(md5($token))));
    }
    function base_encode($str)
    {
        $str = base64_encode($str);
        return strtr($str, $this->pattern());
    }
    function pattern()
    {
        return array(
            '+'=>'_1_',
            '/'=>'_2_',
            '='=>'_3_',
        );
    }

    /**  返回错误消息
     * @param $status 状态吗
     * @return string
     */
    function getErrorMsg($status){
        $statusStr = array(
            "0" => "短信发送成功",
            "-1" => "参数不全",
            "-2" => "服务器空间不支持,请确认支持curl或者fsocket，联系您的空间商解决或者更换空间！",
            "30" => "密码错误",
            "40" => "账号不存在",
            "41" => "余额不足",
            "42" => "帐户已过期",
            "43" => "IP地址限制",
            "50" => "内容含有敏感词"
        );
        return $statusStr[$status];
    }
}

?>