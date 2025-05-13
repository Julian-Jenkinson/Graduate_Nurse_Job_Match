// JavaScript for the slideshow
var slideIndex = 0;

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}

// Initialize the slideshow when the window loads
window.onload = showSlides;

// JavaScript for the job listings
document.addEventListener('DOMContentLoaded', function() {
  fetch('HomePage.xhtml') // URL to the HTML file with data
      .then(response => response.text())
      .then(data => {
          const parser = new DOMParser();
          const doc = parser.parseFromString(data, 'text/html');
          const jobListings = doc.querySelectorAll('.job-listing'); // Selector for the data elements

          jobListings.forEach(jobListing => {
              const jobBox = document.createElement('div');
              jobBox.className = 'job-box';
              jobBox.innerHTML = jobListing.innerHTML;
              document.getElementById('job-listings').appendChild(jobBox);
          });
      });
});