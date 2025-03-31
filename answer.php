<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Right Rectangular Pyramid, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Ain Jeong" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css" />
  <link rel="icon" type="image/png" sizes="32x32" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of a Right Rectangular Pyramid, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Right Rectangular Pyramid, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/pyramid.png" alt="Volume of Pyramid image" width="500" />
      </div>
      <div class="page-content-php">
        <div id="answer">
          <?php
          // input
          $lengthOfPyramid = $_GET["length-of-pyramid"];
          $widthOfPyramid = $_GET["width-of-pyramid"];
          $heightOfPyramid = $_GET["height-of-pyramid"];

          // process
          $volume = ($lengthOfPyramid * $widthOfPyramid * $heightOfPyramid) / 3;

          // output
          echo "The Volume of a Right Rectangular Pyramid is " . (round($volume, 2)) . " mm².";
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>
