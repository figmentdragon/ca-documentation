<?php /* Template Part: Sidebar */ ?>

/**
 * 	This is the sidebar!
 *
 *	This file will render the sidebar, as defined by the user in the admin area
 *
 */


<?php if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>
<div class="col-md-4 col-xxl-3 mt-4 mt-md-0">
  <aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
  </aside>
  <!-- #secondary -->
</div>
=======
<header class="site-header" id="secondary">
	<div class="the">the</div>
		<a href="/">
			<div class="col site-title" style="margin-left:-3.25rem;margin-top:3.75rem;">CREATIVITY</div>
			<div class="col site-title" style="margin-top:5rem;margin-left:.75rem;">ARCHITECT</div>
		</a>
</header>
>>>>>>> pr-6/figmentdragon/page-templates
