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

<body id="body" class="<?php echo $pageName; ?>">
<div class="content-wrap">

<header class="about">
    <div class="grid">
        <div class="column image">
            <img src="i/alison-mckay-by-cassandra-croft.jpg" alt="photo of Alison McKay by Cassandra Croft">
        </div>
        <div class="column text">
            <h1>Alison McKay</h1>
            <p>A self-taught front end developer, my first website was an ode to my love for Harry Potter at age 12. Now, I devote my internet skills to building websites that are accessible to people of all abilities and income levels. The possibilities of the internet are beautiful and endless&mdash;but only if everyone can access the content</p>
        </div>
    </div>
</header>
