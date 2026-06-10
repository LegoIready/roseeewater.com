<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>
            <?php echo ($title === 'Home' ? '' : "$title - "); ?>Roseeewater
        </title>
        <meta name="title" content="<?php echo ($title === 'Home' ? '' : "$title - "); ?>Roseeewater">
        <?php echo (isset($description) ? "<meta name=\"description\" content=\"$description\">" : ''); ?>
        <link rel="icon" type="image/x-icon" href="/images/rocky.ico">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/styles/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- OpenGraph tags -->
        <meta name="og:title" content="<?php echo $title; ?>">
        <meta name="og:type" content="website">
        <meta name="og:image" content="/images/rocky.ico">
        <meta name="og:image:alt" content="The face of Rocky the black cat">
        <meta name="og:url" content="https://www.roseeewater.com<?php echo ($_SERVER['REQUEST_URI'] === '/') ? '' : $_SERVER['REQUEST_URI']; ?>">
        <?php echo (isset($description) ? "<meta name=\"og:description\" content=\"$description\">" : ''); ?>
        <meta name="og:site_name" content="Roseeewater">
        </head>

    <body>
        <script>
            const sites = {
                <?php foreach ($sites as $name=>$site) echo "\"$name\": \"$site\","; ?>
            };
        </script>
        <script src="/scripts/script.js"></script>
        <header>
            <h1><a href="/">ROSEEEWATER</a></h1>
            <nav>
                <a href="/">Home</a><a href="/education">Education</a><a href="/work">Work</a><a href="/publications">Publications</a><a href="/projects">Projects</a><a href="/notes">Notes</a>
            </nav>
        </header>
        <article>
