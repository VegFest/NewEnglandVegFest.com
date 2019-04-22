<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
        <!-- <a class="cta red" href="//NewEnglandVegFest.com/sponsor/?src=frontpage2019"> Sponsor</a> -->
        <!-- <a class="cta yellow" href="//NewEnglandVegFest.com/exhibit/?src=frontpage2019"> Exhibit</a>         -->
        <a class="cta" href="//member.vegfest.org?src=nevf19" target="_blank">BECOME A MEMBER & GET EARLY ADMISSION</a>
        <a class="cta blue" href="//facebook.com/events/2156801437748462/" target="_blank"><i class="fa fa-facebook-square"></i> RSVP ON FACEBOOK</a> -->
			</div>
			<h2>Sunday April 28, 2019 12pm-5pm &middot; DCU Center &middot; Worcester, MA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
