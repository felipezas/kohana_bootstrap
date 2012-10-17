<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <?php echo Html::style('public/css/main.combined.css'); ?>

  <?php echo Html::script('public/js/libs/modernizr.min.js'); ?>
</head>
<body id="<?php echo Request::current()->controller() ?>" class="<?php echo Request::current()->action(); ?>" data-root-url="<?php echo Url::base(TRUE) ?>">
  <header>
  </header>
  <div role="main"> 
    <?php echo $body; ?>
  </div>

  <footer>
  </footer>

  <?php echo Html::script('public/js/script.combined.js'); ?>

  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>
