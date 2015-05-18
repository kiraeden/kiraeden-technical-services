<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>Kiraeden's Blog</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="Services_files/ie-emulation-modes-warning.js"></script>

		<link href="blog.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
	
		<?php
		require_once 'login.php';
		$db_server = mysql_connect($db_hostname, $dbusername, $db_password);
		if(!$db_server) die("Unable to connect to MySQL: " . mysql_error());
		
		mysql_select_db($db_database)
			or die("Unable to select database: " . mysql_error());
		?>
	
		<div class="top-banner">
			
		
		</div>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="Index.html">Kiraeden Technical Services</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="Index.html">Home</a></li>
						<li><a href="About.html">About</a></li>
						<li><a href="Services.html">Services</a></li>
						<li class="active"><a href="blog.html">Blog</a></li>
						<li><a href="Software.html">Software</a></li>
						<li><a href="Projects.html">Projects</a></li>
						<li><a href="Contact.html">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

    <div class="container">
		<div class="blog-style">
		</br>
      <div class="blog-header">
        <h1 class="blog-title">Kiraeden's Blog</h1>
		<p class="blog-description">My Tech Musings</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">The Problem With Patreon</h2>
            <p class="blog-post-meta">October 22, 2014 by <a href="#">Ethan</a></p>

            <p><a href="#"><b>Patreon</b></a>, for those who may not have heard of it, is basically a donation website; a way to tip content creators in small amounts (the minimum tends to be a dollar). The website has been popular for many content creators as a way to pay for their lifestyle and on the whole it's a pretty neat idea.</p>
			
			<p>So what's my problem with it? We (<i>read: the Internet</i>) consume a lot of content from a lot of different content creators. I, for example, read about 20 different webcomics and view many more YouTube artists as well as other content. Now imagine if each of the content creators I patronize decide to hide some or all of their content behind what I'll call a Patreon Pay-wall. I'm already paying Netflix/Hulu/CrunchyRoll/etc for their services, which aren't cheap (to the tune of roughly 30$ a month). Now add to that around $30 or more (if I give one dollar monthly to each of these content creators whose content I want to view). That's a lot of money ($60 a month roughly), especially for me, as I currently work for minimum wage and can barely afford the few bits of entertainment I already pay for.</p>

			<p>As a content creator, your objective is to reach as many people as possible. Those who are willing to pay you for your content however will typically be few and far between. The standard method for obtaining revenue from people is to show them advertisements on your website and make money that way. With Patreon however, you can lock off some or all of the content on your page until a viewer opts to contribute to your Patreon campaign. A few things will likely happen when people can't afford to pay for content. Content creators will likely lose followers that cannot afford to pay for their Patreon campaigns. Those lost followers will then move on to other creators who aren't charging, or who let you view their work simply by viewing an ad or two. Or alternatively, those who cannot pay will seek to pirate the content illegally.</p>

			<p>Now you might say that this is the economy working as it should, and really, it is. But this is where the content creators using Patreon lose out in revenue, because they have now lost followers/subscribers who would have gladly given them advertising revenue by instead trying to push them to contribute more directly via Patreon.</p>

			<p>I believe there is a fix however that Patreon could implement to save this system. Offering its own ad viewing system to generate revenue to pay for Patreon tipping so that this content remains accessible to those who don't make much money. It doesn't have to be ad viewing to generate revenue, but there does need to be some option other than direct payment to support creators on Patreon.</p>
			<a id="software"></a>
		  </div><!-- /.blog-post -->
		  
          <div class="blog-post">
			<h2 class="blog-post-title">Why You Should Use Free Software</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Ethan</a></p>
				
			<p>So why should you use alternative/free software?</p>

			<p>When you are new to computing, there may seem to be only a few options out there for your software, and you may think that what came installed on your computer or what can be purchased at a retail store are your only options. But the truth is that there are many options and alternatives for your everyday software needs, and plenty of them are free!</p>

			<p>To give a brief example if you're using a Windows Operating System, you are probably familiar with Internet Explorer for your web browsing needs. Or if you're using an Apple Computer, you may be familiar with Safari as your web browser. These may seem like your only options, but they aren't. There are several other web browsers, and in the opinion of many internet users, they far surpass both Internet Explorer and Safari in quality and security.</p>
			<p>Two popular alternatives that work on all operating system platforms are Mozilla's Firefox and Google's Chrome browsers. Both are free-ware, meaning there is no cost whatsoever to using them. Both browsers also allow for addons to be downloaded that can enable things like Twitter sidebars that let you watch your Twitter feed from any webpage.</p>
			
			<p>Another great thing about these browsers is that they are free and they are also kept very up-to-date. Up-to-date software is very important for your security especially when browsing the internet because of malicious websites that can hijack browsers and through them, the rest of your computer. While your first line of defense against this is having a good Anti-Virus and Firewall program, your second line of defense is your web browser.</p>
				
          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
          </div><!-- /.blog-post -->

          <ul class="pager" style="color: #123456;">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
          </ul>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4 class="sidebar-module-title">About</h4>
            <p>Welcome to my blog space. This is my sounding board of sorts, where I will discuss various topics, mostly related to technology and the internet.</p>
          </div>
          <div class="sidebar-module">
            <h4 class="sidebar-module-title">Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
			  <li></br></li>
			  <li><a href="#">Show All...</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4 class="sidebar-module-title">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

	  </div> <!-- /.blog-style -->
    </div><!-- /.container -->

    <div class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
