<!-- PHP/HTML document written from https://www.w3schools.com/howto/howto_make_a_website.asp. -->

<html lang="en">

<head>

  <title>Yann-Edwin Keta</title>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/png" href="/images/favicon.ico"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/style.css" media="screen">

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

  <!-- Font Awesome (https://fontawesome.com/) -->
  <link href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" rel="stylesheet">

  <!-- MathJax (https://www.mathjax.org/) -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/latest.js?config=TeX-MML-AM_CHTML' async></script>

  <!-- BibTeX-js (https://github.com/pcooksey/bibtex-js) -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/pcooksey/bibtex-js@1.0.0/src/bibtex_js.js"></script>
  <bibtex src="https://raw.githubusercontent.com/yketa/cv/master/src/publications.bib"></bibtex>

</head>

<body>

  <!-- BibTeX-js template -->

  <div class="bibtex_template">
    <li>
      <p class="article">
        <span class="author"></span>,
        "<span class="title"></span>",
        <span class="if journal">
          <span class="journal"></span>
          <b><span class="volume"></span></b>,
          <span class="pages"></span>
        </span>
        (<span class="year"></span>)
        <span class="if doi">[<a class="bibtexVar" href="https://doi.org/+DOI+" extra="doi">DOI:<span class="doi"></span></a>]</span>.
        <span class="if arxiv"><a class="bibtexVar" href="https://arxiv.org/abs/+ARXIV+" extra="arxiv"><i class="fas fa-unlock"></i>&nbsp;arXiv:<span class="arxiv"></span></a></span>
      </p>
      <span class="if abstract">
        <a href="#" onclick="showHide(this, 'abstract+BIBTEXKEY+')" class="bibtexVar" extra="BIBTEXKEY"><i class="fas fa-chevron-right"></i>&nbsp;Abstract</a>
        <div class="abstract bibtexVar abstract+BIBTEXKEY+" onclick="abstract(this)" style="display: none;" extra="BIBTEXKEY">
          <p class="abstract"><span class="abstract"></span></p>
        </div>
      </span>
    </li>
  </div>

  <!-- BibTeX-js structure -->

  <div class="bibtex_structure">
    <div class="group year" extra="DES number">
      <h2 class="title publicationYear"></h2>
      <ul class="publications">
        <div class="templates"></div>
      </ul>
    </div>
  </div>

  <!-- Display -->

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

