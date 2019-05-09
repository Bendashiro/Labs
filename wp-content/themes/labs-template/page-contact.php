<?php

get_header();

get_template_part('templates/banner')

?>


<!-- Google map -->
<div class="map">
	<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=<?= urlencode(get_theme_mod('setting-map')); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="800" width="100%">
	</iframe>
</div>

<?php

get_template_part('templates/contact-form');

get_footer();
