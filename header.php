<?php include 'connect.php'; ?>
<!doctype html>
<html>

<head>
    <?php
                                   $result = ORM::for_table("site_settings")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>
	<!-- important for compatibility charset -->
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $res['site_title'];?></title>
    <meta name="author" content="">
    <meta name="keywords" content="<?php echo $res['site_keyword'];?>">
    <meta name="description" content="<?php echo $res['site_desc'];?>">
    <?php endforeach; ?>
    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />

    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="css/foundation.min.css" media="all" />

    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />

    <!-- OWL Crousel CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />

    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700%7CRoboto+Slab:400%7CRoboto:900,700" rel="stylesheet" type="text/css" />

    <!-- Revolution Slider styles delete if not using revolution slider -->
    <!-- LOADING FONTS AND ICONS -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/layers.css">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/navigation.css">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62711679-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=1773857816252117&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<!-- MAIN Container Start here. -->
	<div class="container">
        <!-- Top Bar -->
        <div class="topbar">
        	<div class="row">
            <?php
                                   $result = ORM::for_table("site_settings")
                                   ->find_array(1);
                                    ?>
                                     <?php foreach ($result as $res):?>


                <div class="medium-9 small-12 columns">
                    <div class="action-box">
                        <p><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo $res['site_phone'];?></p>
                    </div><!-- icon box ends -->
                <div class="action-box">
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:<?php echo $res['site_email'];?>"><?php echo $res['site_email'];?></a></p>
                    <!-- icon box ends -->

                    </div><!-- icon box ends -->
                </div> <!-- Third Column -->

                <div class="medium-3 small-12 columns text-center text-medium-right">
                	<div class="socialicons">
                        <a href="<?php echo $res['facebook'];?>"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/<?php echo $res['twitter'];?>"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <!-- social Icons -->
<?php endforeach; ?>
            </div><!-- row ends -->
        </div>
        <!-- Top End -->

        <!-- LOGO And Nav Wrap -->
        <div class="header-wrap">
			<div class="row">
            	<div class="medium-4 small-12 columns logo">
                	<a href="./">
                    	<img  alt="" src="images/loogo.png" />
                    </a>
                </div><!-- logo ends -->
                <div class="medium-8 small-12 columns nav-wrap">
                    <!-- navigation Code STarts here.. -->
                    <div class="top-bar">

                        <div class="top-bar-title">
                            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                <a data-toggle><span class="menu-icon dark float-left"></span></a>
                            </span>
                        </div>

                        <nav id="responsive-menu">
                            <ul class="menu vertical medium-horizontal float-right" data-responsive-menu="accordion medium-dropdown">
                                <li><a href="./">Home </a> </li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="experience.php"> Experience </a></li>
                                <li><a href="customer.php"> Customer </a></li>
                               <li><a href="contact.php">Contact </a></li>
                            </ul>
                        </nav>

                    </div><!-- top-bar Ends -->

                </div><!-- Nav Ends -->
            </div><!-- Row ends -->
        </div>
        <!-- LOGO And Nav Wrap -->
