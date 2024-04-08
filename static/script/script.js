// Function to open the side navigation menu
function openNav() {
  document.getElementById("mySidenav").style.left = "0"; // Set the left position of the side navigation to 0
  document.getElementById("main").style.marginLeft = "250px"; // Add left margin to the main content to accommodate the side navigation
}

// Function to close the side navigation menu
function closeNav() {
  document.getElementById("mySidenav").style.left = "-250px"; // Move the side navigation off-screen
  document.getElementById("main").style.marginLeft= "0"; // Remove the left margin from the main content
}

// Function to show/hide the student submenu
function showStudentSubnav() {
  var contentElement = document.getElementById("student-module"); // Get the student submenu element
  contentElement.classList.toggle("show"); // Toggle the 'show' class to display/hide the submenu
}

// Function to show/hide the teacher submenu
function showTeacherSubnav() {
  var contentElement = document.getElementById("teacher-module"); // Get the teacher submenu element
  contentElement.classList.toggle("show"); // Toggle the 'show' class to display/hide the submenu
}

// Function to show/hide the quiz submenu
function showquizSubnav() {
  var contentElement = document.getElementById("quiz-module"); // Get the quiz submenu element
  contentElement.classList.toggle("show"); // Toggle the 'show' class to display/hide the submenu
}

// Variable to keep track of the current slide index
let currentSlide = 0;
// Get all elements with class 'slide'
const slides = document.querySelectorAll('.slide');

// Function to display a specific slide
function showSlide(index) {
  slides.forEach(slide => slide.style.display = 'none'); // Hide all slides
  slides[index].style.display = 'block'; // Display the slide at the specified index
}

// Function to show the next slide
function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length; // Increment the slide index, looping back to 0 if reached the end
  showSlide(currentSlide); // Show the next slide
}

// Function to show the previous slide
function prevSlide() {
  currentSlide = (currentSlide - 1 + slides.length) % slides.length; // Decrement the slide index, looping to the last slide if reached the beginning
  showSlide(currentSlide); // Show the previous slide
}

// Function to start the slideshow
function startSlideshow() {
  showSlide(currentSlide); // Show the initial slide
  setInterval(nextSlide, 5000); // Change to the next slide every 5 seconds
}

// Function to generate a random color
function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)]; // Generate a random hexadecimal color code
  }
  return color; // Return the random color
}

// Function to change the background color of elements with class 'info-div'
function changeColor() {
  var elements = document.querySelectorAll(".info-div"); // Get all elements with class 'info-div'
  elements.forEach(element => {
      element.style.backgroundColor = getRandomColor(); // Change the background color of each element
  });
}

// Call getRandomColor function to set initial background color
getRandomColor();
// Start the slideshow
startSlideshow();

// Get the select element for bank name
var selectElement = document.getElementById("bank-name");

// Add event listener for change event
selectElement.addEventListener("change", function() {
  // Get the selected option
  var selectedOption = selectElement.options[selectElement.selectedIndex].value;
  var bank_account_name = document.getElementById("bank-account-name");

  // Perform actions based on selected option
  switch (selectedOption) {
      case "sbi":
          bank_account_name.value = "State Bank of India"; // Set bank account name based on selected option
          break;
      case "ubi":
          bank_account_name.value = "Union Bank of India"; // Set bank account name based on selected option
          break;
      case "none":
          bank_account_name.disabled =  false; // Enable the bank account name input field
          bank_account_name.value = ""; // Clear the bank account name value
          break;
      default:
          bank_account_name.value = selectedOption; // Set bank account name based on selected option
  }
});
