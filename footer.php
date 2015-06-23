<footer class="mainFooter">

<?php
  $url_encode=urlencode(get_permalink());
  $title_encode=urlencode(get_the_title());
?>
<!--ツイートボタン-->
<div class="mainfootsns">
    
    <p class="snsbar">更新情報は各SNSで発信しています！</p>
    <table class="tablesns">
<tbody>
<tr>
    <td><a href="https://twitter.com/seikeikouken"><img src="<?php bloginfo('template_url'); ?>/item/tw.png" alt="twittericon"></a></td>
<td><a href="https://www.facebook.com/seikeikouken?fref=ts"><img src="<?php bloginfo('template_url'); ?>/item/fb.png" alt="facebook"></a></td>
    <td><a href="https://plus.google.com/106469891625879824238/about"><img src="<?php bloginfo('template_url'); ?>/item/gp.png" alt="googleplus"></a></td>
</tr>
</tbody>
</table>
    
    <div class="footlogo">
    <p>オモシロイ！を発信する広研メディア</p>
    <img src="<?php bloginfo('template_url'); ?>/item/logo2.png" alt="footlogo">
    </div>
    

<br class="clearboth"/>
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>