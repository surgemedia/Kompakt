<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:url"                content="<?php the_permalink() ?>" />
  <meta property="og:site_name"                content="<?php get_bloginfo('name'); ?>" />
	<meta property="og:type"               content="website" />
	<meta property="og:title"              content="<?php the_title() ?>" />
	<meta property="og:description"        content="<?php the_title() ?>" />
	<meta property="og:image"              content="<?php echo getFeaturedUrl(); ?>" />
	<meta name="twitter:card" content="summary" />
	<!-- <meta name="twitter:site" content="@flickr" /> -->
	<meta name="twitter:title" content="<?php the_title() ?>" />
	<meta name="twitter:description" content="<?php truncate(get_the_content(),10,' Read more') ?>" />
	<meta name="twitter:image" content="<?php echo getFeaturedUrl(); ?>" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
  <?php wp_head(); ?>
</head>
