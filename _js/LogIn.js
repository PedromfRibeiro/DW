var modalA = document.getElementById('id01');

// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    //alert(event.target)
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if(event.target == modalA) {
        modalA.style.display = "none";
    }
    var log= loginAA(); //call the php add function


}

