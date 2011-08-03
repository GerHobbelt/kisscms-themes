<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title><? Meta::title() ?></title>
	<? Template::head() ?>
    <link rel="stylesheet" href="<?=myUrl()?>/assets/css/main.css" type="text/css" media="screen" />
</head>
<body>
	<div id="top">
		<div class="container_12">
			<h1 id="logo" class="left">
				<a href="/" title=""><?=$config['main']['site_name']?></a>
			</h1>
            
			<? Menu::ul('ul-id: nav, ul-class: right'); ?>
            
		</div>
	</div>
	<!-- end of #top -->
	<div id="main">
    
		<? Breadcrumb::inline("id: path, h3: 'You are here:'")?> 
		

		<!-- end of #path -->
		<div id="content">
			<div class="container_12">
				<div class="grid_8">
					<!-- posts starts here -->

					<? Template::body('blog'); ?>
					
                    <? Pagination::ul() ?> 

				</div>
				<!-- end of #content -->
				<div class="grid_4" id="sidebar">

				<? Archive::ul() ?>
                
               
			<div class="textwidget"><br></div>
            
            <? Search::view() ?> 
      		 
				</div>
				<div class="clear">
				</div>
				<!-- end of #sidebar -->
			</div>
		</div>

	</div>
	<!-- end of #main -->
	<div id="foot">
		<div class="container_12">
			<div class="grid_3 formatted">

			</div>
			<div class="grid_3 formatted">

			</div>
			<div class="grid_3 formatted">

			</div>
			<div class="grid_3 formatted">
				
			</div>
			<div class="clear">
			</div>
			<!-- end of grid row -->
			<div class="grid_9">
				<p><? Copyright::view() ?></p>
			</div>
			<div class="grid_3">
				<img src="./assets/img/logo.foot.png" alt="">
			</div>
			<div class="clear">
			</div>
			<!-- end of grid row -->
		</div>
	</div>
	<!-- end of #foot -->

<? Template::foot() ?>

</body>
</html>
