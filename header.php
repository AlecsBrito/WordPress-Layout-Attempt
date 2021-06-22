<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head();  ?>
	<style>
	    body {
	        font-family: "Lucida", sans-serif;
        	color: lightgrey;
        	background-color: #121212;
        }
        
        #titleTitle {
        	color: limegreen;
        	text-decoration: none;
        }
        
        #titlePost {
        	color: limegreen;
        	text-decoration: none;
        }
        
        #contentArea {
        	border-top: green 2px solid;
        	overflow:hidden
        }
        
        #footer {
        	background-color: green;
        }
        
        #sidebar {
        	color: limegreen;
        	background-color: transparent;
        }
        
        #sidebar a {
            color: green;
        }
        
        #sidebar a:hover {
            color: limegreen;
        }
	</style>
</head>
<body>
	<div align="center">
		<div id="inner">
			<header>
			<a id="titleTitle" href="<?php echo home_url( '/' ); ?>" title="<?php echo bloginfo('name'); ?>" tagline=" rel="home">
				<h1><?php bloginfo( 'name' ); ?></h1>
			</a>
			</header>
	