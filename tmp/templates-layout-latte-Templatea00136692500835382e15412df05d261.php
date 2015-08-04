<?php
// source: ../templates/layout.latte

class Templatea00136692500835382e15412df05d261 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('d48e26a794', 'html')
;
//
// main template
//
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Koperníkův korespondenční seminář - KoKoS - je matematický seminář pro žáky 6. - 9. tříd.">
    <meta name="author" content="Pavel Trutman">
    <link rel="icon" href="./images/favicon.ico">
    <meta name="keywords" content="KoKoS, Koperníkův Korespondenčí Seminář, Matematika, Matematický seminář">

    <title>Koperníkův Korespondenční seminář</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/additional.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="uvod"><img src="/images/logo.png"><img src="/images/headline.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

<?php $iterations = 0; foreach ($menu as $itemKey => $item) { ?>
                  <li<?php if ($_l->tmp = array_filter(array($itemKey === $page ? 'active' : NULL))) echo ' class="', Latte\Runtime\Filters::escapeHtml(implode(" ", array_unique($_l->tmp)), ENT_COMPAT), '"' ?>
><a href=<?php echo '"', Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($item['link']), ENT_COMPAT), '"' ?>
><span class="fa fa-lg fa-<?php echo Latte\Runtime\Filters::escapeHtml($item['glyphicon'], ENT_COMPAT) ?>
"></span>&nbsp;<?php echo Latte\Runtime\Filters::escapeHtml($item['name'], ENT_NOQUOTES) ?></a></li>
<?php $iterations++; } ?>

              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'carousel', $template->getParameters()) ?>

    <div class="container">

<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ?>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Zpět na začátek</a></p>
        <p>&copy; 2015 &middot; Created by <a href="https://cz.linkedin.com/in/paveltrutman">Pavel Trutman</a> &middot; Contact to Webmaster: <a href="https://cz.linkedin.com/in/paveltrutman">Pavel Trutman</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
<?php
}}