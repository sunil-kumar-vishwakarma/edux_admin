<footer class="footer">
          <div class="container1">
            <div class="footer-row">
              <div class="footer-column">
                <a class="navbar-brand" href="home.html">
			<img src="{{asset('images/edu-x white.png')}}" alt="Edu-X Logo" height="70">
		  </a><br><br>
                <p>101 Frederick St,<br>Kitchener, ON<br>N2H 6R3</p>
                
                <!--<p class="head">Get Social</p>-->
                <!--<div class="social-icons">-->
                <!--  <a href="#" aria-label="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a>-->
                <!--  <a href="#" aria-label="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>-->
                <!--  <a href="#" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>-->
                <!--  <a href="#" aria-label="TikTok" target="_blank"><i class="fab fa-tiktok"></i></a>-->
                <!--   <a href="#" aria-label="Twitter" target="_blank"><i class="fa-brands fa-x-twitter"></i></a> -->
                <!--  <a href="#" aria-label="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>-->
                <!--</div>-->
                
                
              </div>
              <div class="footer-column" id="first-column">
                  <div class="line">
                    <ul>
                <li><a href="{{route('student')}}">Students</a></li>
                    </ul>
                    <ul>
                      <li><a href="{{route('institutions')}}">School</a></li>
              <li><a href="{{route('partner')}}">Recruiters</a></li>
                    </ul>
                </div>
              <h2>Discover</h2><br>
              <div class="line2">
              <ul >
                <li><a href="{{route('search')}}">Discover Programs</a></li>
                <li><a href="{{route('institutions')}}">Discover Schools</a></li>
                <li><a href="{{route('student-register')}}">Register</a></li>
              </ul>
            </div>
              </div>
              <div class="footer-column">
                <h3>About</h3>
                <ul>
                  <li><a href="{{route('web')}}">Our Story</a></li>
                  <li><a href="{{route('webinar')}}">Careers</a></li>
                  <li><a href="{{route('blogs-pages')}}">Blog</a></li>
                  <li><a href="{{route('webinar.learnmore')}}">Press</a></li>
                  <li><a href="{{route('webinar.readmore')}}">Life </a></li>
                  <li><a href="{{route('partner')}}">Leadership</a></li>
                  <li><a href="{{route('contactus')}}">Contact</a></li>
                </ul>
              </div>
              <div class="footer-column">
                <h3>Resources</h3>
                <ul>
                  <li><a href="{{route('webinar.readmore')}}">US Resources</a></li>
                  <li><a href="{{route('webinar.readmore')}}">UK Resources</a></li>
                  <li><a href="{{route('webinar.readmore')}}">AU Resources</a></li>
                </ul>
        
                <div class="footer-column">
                  <h3>Legal</h3>
                  <ul>
                    <li><a href="{{route('privacy.policy')}}" target="_blank">Privacy & Cookies Policy</a></li>
                    <li><a href="{{route('term.and.condition')}}" target="_blank">Terms & Conditions</a></li>
                    
                    <li><a href="{{route('eduxfees')}}">EduX Fees</a></li>
                   
                  </ul>
                </div>
                
              </div>
              <div class="copyright">
                <p>© 2024 Edu-X Inc</p>
              </div>  
            </div>
          </div>
        </footer>
        </div>
        <!-- footer-end -->



<script>
    document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".tab-button2");
    const videoElement = document.getElementById("video-player2");
    const videoSource = document.getElementById("video-source2");

    // Define video paths for each tab
    const videoSets = {
        "students-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4",
        "recruitment-partners-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4"
    };

    buttons.forEach((button) => {
        button.addEventListener("click", () => {
            // Remove active class from all buttons
            buttons.forEach((btn) => btn.classList.remove("active2"));

            // Add active class to the clicked button
            button.classList.add("active2");
     
            // Update video source based on the clicked button
            const target = button.getAttribute("data-target");
            videoSource.src = videoSets[target];

            // Load and play the new video
            videoElement.load();
            // videoElement.play();
        });
    });

    // Trigger click on the default active button to load its video
    document.querySelector(".tab-button2.active2").click();
});




document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".tab-button");
  const videoElement = document.getElementById("video-player");
  const videoSource = document.getElementById("video-source");

  // Define video paths for each tab
  const videoSets = {
    "students-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4",
    "recruitment-partners-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
    "partner-institutions-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
  };

  // Set the active button class on page load
  const defaultActiveButton = document.querySelector(".tab-button.active1");
  const defaultTarget = defaultActiveButton.getAttribute("data-target");
  const defaultVideo = videoSets[defaultTarget];
  videoSource.src = defaultVideo;
  videoElement.load();
  // videoElement.play();

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons
      buttons.forEach((btn) => btn.classList.remove("active1"));

      // Add active class to the clicked button
      button.classList.add("active1");

      // Update video source based on the clicked button
      const target = button.getAttribute("data-target");
      videoSource.src = videoSets[target];

      // Load and play the new video
      videoElement.load();
     // videoElement.play();
    });
  });
});




document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");
  const heroImages = document.querySelector(".hero-images");
  
  // Define image sets for each tab
  const imageSets = {
    students: [
      "images/student.jpg",
      "images/partner_img.webp",
      "images/institutions.jpg"
    ],
    "recruitment-partners": [
      "images/partner_img.webp",
      "images/institutions.jpg",
      "images/student.jpg"
    ],
    "partner-institutions": [
      "images/institutions.jpg",
      "images/student.jpg",
      "images/partner_img.webp"
    ],
  };

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons
      buttons.forEach((btn) => btn.classList.remove("active"));

      // Add active class to the clicked button
      button.classList.add("active");

      // Hide all tab contents
      tabContents.forEach((content) => (content.style.display = "none"));

      // Show the content corresponding to the clicked button
      const target = button.getAttribute("data-target");
      document.getElementById(target).style.display = "block";

      // Update images for the active tab
      const images = imageSets[target];
      heroImages.innerHTML = ""; // Clear current images
      images.forEach((src, index) => {
        const imageCard = document.createElement("div");
        imageCard.className = `image-card`;
        imageCard.style.zIndex = 3 - index; // Adjust stacking
        imageCard.style.transform = `translateX(${(index - 1) * 50}%) translateY(${index * 20}px)`; // Adjust positions
        imageCard.innerHTML = `<img src="${src}" alt="Image ${index + 1}">`;
        heroImages.appendChild(imageCard);
      });
    });
  });

  // Trigger click on the default active button to load its images
  document.querySelector(".tab-btn.active").click();
});


document.addEventListener('DOMContentLoaded', function () {
  // Get all the buttons and content sections
  const buttons = document.querySelectorAll('.tab-button');
  const sections = document.querySelectorAll('.content');

  // Add event listener to each button
  buttons.forEach(button => {
    button.addEventListener('click', function () {
      // Get the target section ID
      const target = this.getAttribute('data-target');
      
      // Hide all content sections
      sections.forEach(section => {
        section.classList.remove('active-content');
      });

      // Show the content section corresponding to the button clicked
      const activeSection = document.getElementById(target);
      activeSection.classList.add('active-content');
    });
  });
});


</script>



<script>
      const togglePassword = document.getElementById('toggle-password');
      const passwordInput = document.getElementById('password-input');

      togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
      });
      
      
      
      const toggleButton = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');

toggleButton.addEventListener('click', function () {
    if (navbarCollapse.classList.contains('collapse')) {
        navbarCollapse.classList.remove('collapse');
        navbarCollapse.classList.add('show');
    } else {
        navbarCollapse.classList.remove('show');
        navbarCollapse.classList.add('collapse');
    }
});


document.addEventListener("DOMContentLoaded", function () {
  const createAccountBtn = document.getElementById("btn1");
  const passwordInput = document.getElementById("password-input");
  const nameInput = document.querySelector("input[placeholder='Your Name']");
  const emailInput = document.querySelector("input[placeholder='Your Email']");
  const termsCheckbox = document.getElementById("tc");

  // Function to show error messages below the field (2px higher)
  function showError(input, message) {
    let parentDiv = input.closest(".input-icon") || input.parentElement;
    let errorMsg = parentDiv.nextElementSibling;

    if (!errorMsg || !errorMsg.classList.contains("error-msg")) {
      errorMsg = document.createElement("small");
      errorMsg.classList.add("error-msg");
      errorMsg.style.color = "red";
      errorMsg.style.fontSize = "12px";
      errorMsg.style.display = "block";
      errorMsg.style.marginTop = "-10px"; // 2px higher (was 3px before)
      parentDiv.insertAdjacentElement("afterend", errorMsg);
    }

    errorMsg.textContent = message;
    input.style.border = "2px solid red";
  }

  // Function to clear error messages
  function clearError(input) {
    let parentDiv = input.closest(".input-icon") || input.parentElement;
    let errorMsg = parentDiv.nextElementSibling;

    if (errorMsg && errorMsg.classList.contains("error-msg")) {
      errorMsg.remove();
    }

    input.style.border = "1px solid #ccc";
  }

  function validateEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
  }

  function validatePassword(password) {
    const re = /^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/;
    return re.test(password);
  }

  createAccountBtn.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default action

    let valid = true;
    let nameValue = nameInput.value.trim();
    let emailValue = emailInput.value.trim();
    let passwordValue = passwordInput.value.trim();

    // Validate Name
    if (nameValue === "") {
      showError(nameInput, "Please enter your name.");
      valid = false;
    } else {
      clearError(nameInput);
    }

    // Validate Email
    if (!validateEmail(emailValue)) {
      showError(emailInput, "Please enter a valid email address.");
      valid = false;
    } else {
      clearError(emailInput);
    }

    // Validate Password
    if (!validatePassword(passwordValue)) {
      showError(
        passwordInput,
        "Password must be at least 8 characters long, include 1 uppercase letter, and 1 special character."
      );
      valid = false;
    } else {
      clearError(passwordInput);
    }

    // Validate Checkbox (No alert, just an error message below)
    let checkboxError = document.querySelector(".checkbox .error-msg");
    if (!termsCheckbox.checked) {
      if (!checkboxError) {
        checkboxError = document.createElement("small");
        checkboxError.classList.add("error-msg");
        checkboxError.textContent = "You must agree to the Terms and Conditions.";
        checkboxError.style.color = "red";
        checkboxError.style.fontSize = "12px";
        checkboxError.style.display = "block";
        checkboxError.style.marginTop = "1px"; // 2px higher
        termsCheckbox.parentElement.appendChild(checkboxError);
      }
      valid = false;
    } else {
      if (checkboxError) checkboxError.remove();
    }

    // If all validations pass, redirect to dashboard
    if (valid) {
      window.location.href = "userdashboard.html"; // Redirect to dashboard
    }
  });

  // Real-time validation
  nameInput.addEventListener("input", () => {
    if (nameInput.value.trim() !== "") {
      clearError(nameInput);
    }
  });

  emailInput.addEventListener("input", () => {
    if (validateEmail(emailInput.value.trim())) {
      clearError(emailInput);
    }
  });

  passwordInput.addEventListener("input", () => {
    if (validatePassword(passwordInput.value.trim())) {
      clearError(passwordInput);
    }
  });

  termsCheckbox.addEventListener("change", () => {
    let checkboxError = document.querySelector(".checkbox .error-msg");
    if (termsCheckbox.checked && checkboxError) {
      checkboxError.remove();
    }
  });
});




    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <!-- Add Bootstrap and JS dependencies -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

     

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   


   <script>
          function toggleDropdown(selectedSummary) {
            // Close all other details elements
            document.querySelectorAll('.dropdown-container details').forEach(details => {
              if (details.querySelector('summary') !== selectedSummary) {
                details.removeAttribute('open');
              }
            });
          }
        </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <!-- Bootstrap CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Bootstrap JS (Popper.js Included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

