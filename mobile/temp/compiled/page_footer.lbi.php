<div class="footer"  style="padding-bottom:2em;">
      <div class="links"  id="ECS_MEMBERZONE"> <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
          <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
      <div class="links" >
      <a href="javascript:;"><span class="gl">触屏版</span></a>
      <a href="http://pcib.sj.91.com/soft/Controller.ashx?action=readfile&f_id=41520455&platform=android&position=1000011&positionIndex=1&project=2200&qrcode=1"><span>安卓端</span></a>
      <a href="https://itunes.apple.com/cn/app/ecshop-kai-fa-zhong-xin/id805998027?l=zh&ls=1&mt=8"><span>苹果端</span></a>
      </div>
</div>
<section>
  <div id="jisou-info" class="jisou-info" style="display: none;"></div>
  <div class="info-nr">
    <div id="info-nr-phone" class="info-nr-phone color-orange">
      <input id="info-nr-btn" type="checkbox" name="" value="" class="info-nr-menu">
      <div class=""> <a href="tel:4000785268" class="icon-phone"></a> </div>
      <div class=""> <a href="index.php" class="icon-location"></a> </div>
      <div class=""> <a href="user.php?act=message_list" class="icon-message"></a> </div>
      <div class=""> <a href="share.php" class="icon-share"></a> </div>
    </div>
  </div>
</section>
<a href="#top" class="u-backtop" id="goTop"><span class="u-icon i-backtop"></span></a>

<script>
        window.addEventListener("DOMContentLoaded", function () {
            btn = document.getElementById("info-nr-btn");
            btn.onclick = function () {
                var divs = document.getElementById("info-nr-phone").querySelectorAll("div");
                var className = className = this.checked ? "on" : "";
                for (i = 0; i < divs.length; i++) {
                    divs[i].className = className;
                }
                document.getElementById("jisou-info").style.display = "on" == className ? "block" : "none";
            }
        }, false);
    </script>
<script>
$(function () {
            new Swipe(document.getElementById('jisou-banner'), {
                speed: 500,
                auto: 3000,
                callback: function () {
                    var lis = $(this.element).next("ol").children();
                    lis.removeClass("on").eq(this.index).addClass("on");
                }
            });
        });
</script>
<script>
function mall_search(){
	$(window).scroll(function() {
		h = $(window).height();
		t = $(document).scrollTop();
		t > h ? $("#goTop").fadeIn() : $("#goTop").fadeOut();
	});	
}
mall_search();
</script>