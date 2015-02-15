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
<script src="//ads.lfstmedia.com/getad?site=230633" type="text/javascript"></script>
	
<script type="text/javascript">
    //<![CDATA[
        LSM_Slot({
            adkey: \'c8f\',
            ad_size: \'320x50\',
            slot: \'slot90105\'
        });
    //]]>
</script>
<br/>


 '; } 
  $fb_footer .= ' 
<a href="https://www.xtendify.com/en/product/83-facebook-popup-like-box-for-wordpress-plugin" rel="nofollow" title="Download from Xtendify - Best Plugins and Themes Marketplace">Get Widget</a></span></center>
</div>
</div>
 '; ?>
