<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="A studio website" name="description">
	<meta content="Hazel Llanes" name="author">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav id="navbar">
		<div class="container">
			<h1>Studio New</h1>
			<span class="fa fa-bars fa-2x"></span>
			<ul class="dropdown">
				<li><a href="index.php" <?php if ($page_title == "Home"):echo 'class="current"'; endif; ?>>Home</a></li>
				<li><a href="about.php" <?php if ($page_title == "About"):echo 'class="current"'; endif; ?>>About Us</a></li>
				<li><a href="services.php" <?php if ($page_title == "Services"):echo 'class="current"'; endif; ?>>Services</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</nav><!-- /nav -->

		<header <?php 
  if($page_title == "Home" ){ 
    echo "class=\"home\"";
  } elseif ($page_title == "About") {
  	echo "class=\"about\"";
  } elseif ($page_title == "Services") {
  	echo "class=\"services\"";
  } 
?>>
		<div class="container">