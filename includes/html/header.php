<?php

    // Define our current language
    $lang = (isset($_GET["lang"])) ? $lang = $_GET["lang"] : "en";

    // Wrap it to our folder structure
    $langOptions = array("en" => "en_US", "pt" => "pt_BR");

    if (array_key_exists($lang, $langOptions)) {
        $completeLang = $langOptions[$lang];
    } else {
        $completeLang = "en_US";
    }

    // Set environment variables
    putenv("LC_ALL=$completeLang");
    setlocale(LC_ALL, $completeLang);
    bindtextdomain($completeLang, "locale");
    bind_textdomain_codeset($completeLang, 'UTF-8');
    textdomain($completeLang);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
    <meta charset="utf-8">
    <title>Pedro Góes - Trilha, USP, Brasil</title>
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="Presenca/js/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
    <script src="js/default.js" type="text/javascript"></script>
    <script src="js/analytics.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="css/default.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/mobile.css" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
</head>