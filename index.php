<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Type Inspiration</title>

  <!-- universal styles -->
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/general_foundicons.css" />
  <link rel="stylesheet" href="css/general_foundicons_ie7.css" />
  
  <!-- quote style -->
  <link rel="stylesheet" href="css/quotes_css/qtsa.css" />
  
  <!-- fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

<?php
$pagesArray = array('qotsa.php', 'buddha.php', 'jk.php', 'jl.php', 'wc.php');
$randNum = rand(0, count($pagesArray)-1);
include $pagesArray[$randNum];
?>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
