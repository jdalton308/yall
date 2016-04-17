
<!DOCTYPE html>
<html>
<head>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta charset="UTF-8">
  <meta name="themeColor" content="#bd9b37">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icons -->
  <link rel="shortcut icon" sizes="152x152" href="/favicon-152.png" />
  <link rel="icon" sizes="16x16 32x32" href="/favicon-32.png" />
  <link rel="apple-touch-icon" href="favicon-152.png" />

  <!-- Facebook/Open Graph -->
  <meta property="fb:app_id" content="1697959227110252">
  <meta property="og:url" content="http://www.yall.co">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Y'all Collective">
  <meta property="og:description" content="We’re tellin’ the stories of creative New Yorkers with Southern roots—how they live, what they make, & why they’re here.">
  <meta property="og:site_name" content="Y'all Collective">

  <meta property="og:image" content="http://www.yall.co/assets/img/social-1200.jpg">
  <meta property="og:image:url" content="http://www.yall.co/assets/img/social-1200.jpg">
  <meta property="og:image:secure_url" content="https://www.yall.co/assets/img/social-1200.jpg">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@YallCollective">
  <meta name="twitter:title" content="Y'all Collective">
  <meta name="twitter:description" content="We're telling the stories of creative southerners in NYC">
  <meta name="twitter:image" content="http://www.yall.co/assets/img/social-1200.jpg">

  <!-- Webfonts -->
  <link rel="stylesheet" type="text/css" href="https://cloud.typography.com/7655474/6672752/css/fonts.css" />
  <!-- <link rel="stylesheet" charset="utf-8" href="/css/main.css"> -->

	<?php wp_head(); ?>

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64247415-1', 'auto');
    ga('send', 'pageview');

  </script>
	
</head>

<body <?php body_class(); ?>>

	<!-- Facebook -->
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1697959227110252',
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>


	<header>
	  <a href="/" class="icon-logo"></a>

	  <nav>
	    <!-- <a href="/" class="nav-item home-item">HOME</a> -->
			<?php wp_nav_menu( array( 
			  'theme_location' => 'primary',
			  'container' => '',
        'items_wrap' => '%3$s',
        'walker' => new Description_Walker
			) ); ?>
	  </nav>

	  <div class="social-links">
	    <a href="https://www.facebook.com/yallcollective" class="icon-facebook gold-icon" target="_blank"></a>
	    <a href="https://www.twitter.com/yallcollective" class="icon-twitter gold-icon" target="_blank"></a>
	    <a href="https://www.pinterest.com/yallcollective" class="icon-pinterest gold-icon" target="_blank"></a>
	  </div>
	</header>
