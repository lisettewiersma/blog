// Get the modal
var headermodal = document.getElementById("headerModal");

// Get the button that opens the modal
var headerbtn = document.getElementById("readmorebttnheader");

// Get the <span> element that closes the modal
var headerspan = document.getElementsByClassName("headerclose")[0];

// When the user clicks on the button, open the modal
headerbtn.onclick = function() {
  headermodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
headerspan.onclick = function() {
  headermodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == headermodal) {
    headermodal.style.display = "none";
  }
}
