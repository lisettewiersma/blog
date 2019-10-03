// Get the modal
var registerModal = document.getElementById("registerModal");

// Get the button that opens the modal
var registerBtn = document.getElementById("registerbttn");

// Get the <span> element that closes the modal
var registerSpan = document.getElementsByClassName("registerclose")[0];

// When the user clicks on the button, open the modal
registerBtn.onclick = function() {
  registerModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
registerSpan.onclick = function() {
  registerModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == registerModal) {
    registerModal.style.display = "none";
  }
}
