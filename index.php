<!-- PHP/HTML document written from https://www.w3schools.com/howto/howto_make_a_website.asp. -->

<html lang="en">

<head>

  <title>Yann-Edwin Keta</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/png" href="/images/favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/style.css" media="screen">
  <link href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" rel="stylesheet">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>

  <script type="text/javascript" src="/script.js"></script>
  <script type="text/javascript">
    window.onload = function() {
      displayURL(); /* display main panel corresponding to URL */ 
      var buttons = document.querySelectorAll(".navbutton"); /* navigation bar buttons */ /*https://stackoverflow.com/questions/22767609/add-event-listener-to-dom-elements-based-on-class */
      for (var i=0; i < buttons.length; i++) {
        buttons[i].addEventListener('mouseover', overUnderbar); /* set onmouseover event */
        buttons[i].addEventListener('mouseout', outUnderbar); /* set onmouseout event */
      }
    }
  </script>

</head>

<body>

  <div class="header"></div>

  <div class="row">
    <div class="side">
      <?php include("./panes/side.html"); ?>
    </div>
    <div class="navmain">
      <div class="navbar">
        <?php include("./panes/navbar.html"); ?>
      </div>
      <div id="underbar" style="display: none;"></div>
      <div class="main" id="about" style="display: none;">
        <?php include("./panes/about.html"); ?>
      </div>
      <div class="main" id="research" style="display: none;">
        <?php include("./panes/research.html"); ?>
      </div>
      <div class="main" id="publications" style="display: none;">
        <?php include("./panes/publications.html"); ?>
      </div>
      <div class="main" id="miscellaneous" style="display: none;">
        <?php include("./panes/miscellaneous.html"); ?>
      </div>
    </div>
  </div>

  <div class="footer" style="display: none;">
    <?php include("./panes/footer.html"); ?>
  </div>

</body>

</html>

