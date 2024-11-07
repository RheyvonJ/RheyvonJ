
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



        var timeOut = 2000;
        var slideIndex = 0;
        var autoOn = true;

        autoSlides();

        function autoSlides() {
            timeOut = timeOut - 20;

            if (autoOn == true && timeOut < 0) {
                showSlides();
            }
            setTimeout(autoSlides, 20);
        }

        

        function showSlides() {

            timeOut = 2000;

            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
