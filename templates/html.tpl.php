<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"<?php print $rdf_namespaces; ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"<?php print $rdf_namespaces; ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"<?php print $rdf_namespaces; ?>><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php print $rdf_namespaces; ?>><!--<![endif]-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <?php print $styles; ?>        
    <!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" media="screen"> -->
    <!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>

    <?php print $page; ?>       

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <?php print $scripts; ?>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
  </body>
</html>