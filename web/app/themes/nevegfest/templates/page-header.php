<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
        <a class="cta" href="/exhibiting">I'm interested in being a vendor!</a>
        <a class="cta yellow" href="//www.facebook.com/NewEnglandVegFest/" target="_blank"><i class="fa fa-facebook-square"></i> Like us on Facebook</a>
        <!-- <a class="cta yellow" href="/member/">Become a member - $25</a> -->
			</div>
			<h2>Sunday April 30, 2017 &middot; 11AM-5PM &middot; DCU Center &middot; Worcester, MA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
