<?php
/*
Template Name: topWidget
*/
?>

<div id="widgetArea">
<?php if ( is_active_sidebar( 'top-Widget' ) ) :
dynamic_sidebar( 'Top Widget' );
else: ?>
<div class="widget">
<h2>No Widget</h2>
<p>ウィジットは設定されていません。</p>
</div>
<?php endif; ?>
</div>