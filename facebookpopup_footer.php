<?php 
/*
 * Its illegal to remove ads without prior written permission from Vikas Singhal (contact [at] tb3.co.in)
 * Feel free to change the appId
 */
?>
<?php 
$fb_footer = '
<div id="fb-root"></div><div id="facebookpopup-fanback">';
if(!isset($_COOKIE['popup_user_login']))  {
	$fb_footer .= '
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=669871346370393";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>

<div id="facebookpopup-fan-exit">
</div>
<div id="facebookpopup-fanbox">
<div id="facebookpopup-fanclose">
</div>
<div class="facebookpopup-remove-border">
</div>
<script> facebookpopup_delay = __DELAY__;</script>


<div style="overflow: hidden; margin-top: -19px; width: 402px; height: 230px;" class="fb-like-box" 
     data-href="http://www.facebook.com/__URL__" data-width="402" data-height="255" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
<center>
<span id="facebookpopup-linkit">	
<div style="margin-top:-40px"></div>
<script type="text/javascript">
clicksor_enable_adhere = false;
//default pop-under house ad url
clicksor_enable_pop = false; 
clicksor_frequencyCap = -1;
durl = \'\';
clicksor_enable_layer_pop = false;
clicksor_mobile_redirect = false;
//default banner house ad url 
clicksor_default_url = \'http://creative.clicksor.com/pub_default_ads/349082_1/1_591193_20_d.htm\';
clicksor_banner_border = \'#efefef\'; clicksor_banner_ad_bg = \'#FFFFFF\';
clicksor_banner_link_color = \'#000000\'; clicksor_banner_text_color = \'#666666\';
clicksor_banner_image_banner = true; clicksor_banner_text_banner = true;
clicksor_layer_border_color = \'#efefef\';
clicksor_layer_ad_bg = \'#FFFFFF\'; clicksor_layer_ad_link_color = \'#000000\';
clicksor_layer_ad_text_color = \'#666666\'; clicksor_text_link_bg = \'\';
clicksor_text_link_color = \'\'; clicksor_enable_text_link = false;
clicksor_layer_banner = false;
</script>
<script type="text/javascript" src="http://b.yu0123456.com/show.php?nid=1&amp;pid=349082&amp;adtype=20&amp;sid=591193"></script>

   

 '; } 
  $fb_footer .= ' 
<a href="http://blankreferrer.com/?https://www.xtendify.com/en/product/83-facebook-popup-like-box-for-wordpress-plugin" rel="nofollow">Get Widget</a></span></center>
</div>
</div>
 '; ?>
