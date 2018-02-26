<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
        <!-- <a class="cta" href="/exhibit/?src=frontpage">Apply to Exhibit!</a> -->
        <a class="cta yellow" href="/member/?src=frontpage">Become a member</a>
        <a class="cta" href="//www.facebook.com/events/765063066992237/" target="_blank"><i class="fa fa-facebook-square"></i> RSVP ON FACEBOOK</a>
			</div>
			<h2>Sunday April 30, 2017 &middot; 11AM-5PM &middot; DCU Center &middot; Worcester, MA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
