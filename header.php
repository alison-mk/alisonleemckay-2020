<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php // set time zone
    	date_default_timezone_set('America/Los_Angeles');

    	// static page titler; remove instances from WP template
    	$pageName = substr(basename($_SERVER['PHP_SELF']), 0, -4);
    	if ($pageName === 'index') $pageName = 'home'; ?>
    <title>Alison McKay | Front End Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="i/favicon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="<?php echo $pageName; ?>">

<header>
	<h1>Alison McKay</h1>
</header>
