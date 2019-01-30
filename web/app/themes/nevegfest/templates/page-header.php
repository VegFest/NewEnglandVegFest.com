<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
        <!-- <a class="cta yellow" href="//NewEnglandVegFest.com/exhibit/?src=frontpage2018"> Exhibit/Sponsor at VegFest</a> -->
        <a class="cta" href="//facebook.com/events/144050729606900/" target="_blank"><i class="fa fa-facebook-square"></i> RSVP ON FACEBOOK</a>
        <a class="cta yellow" href="//member.vegfest.org?src=nevf18" target="_blank">BECOME A MEMBER & GET EARLY ADMISSION</a>
			</div>
			<h2>Sunday April 28, 2019 &middot;  DCU Center &middot; Worcester, MA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
