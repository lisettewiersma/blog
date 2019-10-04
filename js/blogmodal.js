// Get the modal
var blogmodal = document.getElementById("blogModal");

// Get the button that opens the modal
var blogbtn = document.getElementById("readmorebttn");

// Get the <span> element that closes the modal
var blogspan = document.getElementsByClassName("blogclose")[0];

// When the user clicks on the button, open the modal
blogbtn.onclick = function() {
  blogmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
blogspan.onclick = function() {
  blogmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == blogmodal) {
    blogmodal.style.display = "none";
  }
}
