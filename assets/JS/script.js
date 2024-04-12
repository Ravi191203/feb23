// This example script adds a simple animation when clicking the "About Me" section

const aboutMe = document.querySelector("main h2");

aboutMe.addEventListener("click", function() {
  aboutMe.classList.toggle("active");
});

// This script adds the active class for initial page load
window.onload = function() {
  aboutMe.classList.add("active");
};
