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
    <title>Pedro Góes - InEvent</title>

	<meta name='language' content='<?php echo $completeLang ?>'>
	<meta name='description' content='<?php echo _("Pedro Góes, fundador da InEvent, um aplicativo inteligente com conexões e interações para eventos. Formado na Universidade de São Paulo. Vlog semanal, textos sobre estratégia e percepções sobre a carreira profissional.") ?>'>
	<meta name='keywords' content='<?php echo _("inevent, startups, estratégia, usp, empreendedor, profissional, carreiras, opinião, aprendizado, crescimento") ?>'>
	<meta name='robots' content='all'>
	<meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/default.js" type="text/javascript"></script>
    <script src="js/analytics.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="css/default.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/mobile.css" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
</head>