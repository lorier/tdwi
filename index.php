<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
  <title>TDWI Style Guide</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#000000">

  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


  <!-- Style Guide Boilerplate Styles -->
  <link rel="stylesheet" href="css/sg-style.css">
  <!--[if lt IE 9]><link rel="stylesheet" href="css/sg-style-old-ie.css"><![endif]-->

  <!-- https://github.com/sindresorhus/github-markdown-css -->
  <link rel="stylesheet" href="css/github-markdown.css">

  <!-- Replace below stylesheet with your own stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <!-- prism Syntax Highlighting Styles -->
  <link rel="stylesheet" href="vendor/prism/prism.css">
</head>
<body>
  <a href="#main" class="sg-visually-hidden sg-visually-hidden-focusable">Skip to main content</a>

  <div id="top" class="sg-header" role="banner">
    <div class="sg-container">
      <h1 class="sg-logo">
        <em>STYLE GUIDE</em>
      </h1>
      <button type="button" class="sg-nav-toggle">Menu</button>
    </div>
  </div><!--/.sg-header-->

  <div class="sg-wrapper sg-clearfix">
    <div id="nav" class="sg-sidebar" role="navigation">
      <h2 class="sg-h2 sg-subnav-title">About</h2>
      <ul class="sg-nav-group">
        <li>
          <a href="#sg-about">Getting Started</a>
        </li>
      </ul>

      <?php listFilesInFolder('markup'); ?>
    </div><!--/.sg-sidebar-->

    <div id="main" class="sg-main" role="main">
      <div class="sg-container">
        <div class="sg-info">
          <div class="sg-about sg-section">
            <h2 id="sg-about" class="sg-h2">Getting Started</h2>
            <p>A living style guide is a great tool to promote visual consistency, unify UX designers and front-end developers, as well as speed up development times.</p>
          </div><!--/.sg-about-->


      

        <?php renderFilesInFolder('markup'); ?>
      </div><!--/.sg-container-->
    </div><!--/.sg-main-->
  </div><!--/.sg-wrapper-->

  <!--[if gt IE 8]><!--><script src="vendor/prism/prism.js"></script><!--<![endif]-->
  <script src="js/sg-scripts.js"></script>
</body>
</html>

