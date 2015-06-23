<?php
/*
Template Name: frontWidget
*/
?>

<div id="widgetArea">
<?php if ( is_active_sidebar( 'front-Widget' ) ) :
dynamic_sidebar( 'Front Widget' );
else: ?>
<div class="widget">
<h2>No Widget</h2>
<p>ウィジットは設定されていません。</p>
</div>
<?php endif; ?>
</div>