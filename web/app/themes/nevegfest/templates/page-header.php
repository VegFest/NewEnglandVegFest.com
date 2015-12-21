<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
				<!-- <a class="cta" href="//www.facebook.com/events/355366494646694/" target="_blank"><i class="fa fa-facebook-square"></i> RSVP</a> -->
				<a class="cta" href="/sponsor-and-exhibitor-application/">Sponsor & Exhibit Sign Up</a>
			</div>
			<h2>May 1, 2016 &middot; 11AM-5PM &middot; Worcester, MA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
