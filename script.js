var display = 'about';

/* Display content corresponding to tab */
function displayMain(id) { /* https://stackoverflow.com/questions/1735003/changing-content-of-a-div-with-javascript-and-php-include */
  try {
    document.getElementById(display).style.display = "none";
    document.getElementById(display + "_button").classList.remove("active"); /* https://stackoverflow.com/questions/2155737/remove-css-class-from-element-with-javascript-no-jquery */
    document.getElementById(id).style.display = "";
    document.getElementById(id + "_button").classList.add("active");
    display = id;
  }
  catch(err) {
    document.getElementById(display).style.display = "";
    document.getElementById(display + "_button").classList.add("active");
  }
  document.title = "Yann-Edwin Keta — " + document.getElementById(display + "_button").title;
}

/* Get URL 's' parameter */
function sURL() {
  var url = new URL(window.location.href); /* https://usefulangle.com/post/78/javascript-get-url-parameters */
  var query_string = url.search;
  var search_params = new URLSearchParams(query_string); 
  return search_params.get("s");
}

/* Display content corresponding to URL */
function displayURL() {
  displayMain(sURL());
}

/* Over and out underbar */
function outUnderbar() {
  document.getElementById("underbar").classList.remove("hover");
}
function overUnderbar() {
  document.getElementById("underbar").classList.add("hover");
}

/* Show/hide */
function showHide(el, cl) {
  var elements = document.getElementsByClassName(cl);
  for (var i = 0; i < elements.length; i++) {
    if (elements.item(i).style.display == "none") { /* show element */
      el.innerHTML = el.innerHTML.replace("fa-chevron-right", "fa-chevron-down");
      elements.item(i).style.display = "";
    }
    else { /* hide element */
      el.innerHTML = el.innerHTML.replace("fa-chevron-down", "fa-chevron-right");
      elements.item(i).style.display = "none";
    }
  }
}

