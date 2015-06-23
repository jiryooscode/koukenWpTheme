<div id="widgetArea">
<?php if ( is_active_sidebar( 'side-Widget' ) ) :
dynamic_sidebar( 'Side Widget' );
else: ?>
<div class="widget">
<h2>No Widget</h2>
<p>ウィジットは設定されていません。</p>
</div>
<?php endif; ?>
</div>