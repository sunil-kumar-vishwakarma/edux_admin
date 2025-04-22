@extends('frontent.layouts.app')
@section('title', 'EduX | Student Registration')
@section('content')

    <style>
        .navbar-brand {
            display: flex;
            gap: 15px;
        }


        .navbar-brand img {
            height: 70px !important;
            width: auto;
            margin-left: 17.5px;

        }


        .navbar-brand div {
            font-size: 27px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
            font-weight: bold;
            margin-top: 17px;
        }

        .login-signup a {
            background-color: blue;
            color: white;
            font-weight: 550;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border: 1px solid white;
        }

        .login-signup a:hover {
            background-color: white;
            color: black;
        }




        .navbar {
            padding: 5px 0;
            width: 100%;
            height: 100px;
            background-color: #1652b4;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 5px 15px;
            position: relative;
        }

        .btn-group a .btn {
            border: 1px solid white;
            font-weight: bold;
        }

        .btn-group a .btn-outline-primary {
            color: blue;

        }

        .btn-group a .btn:hover {
            background-color: white;
            color: black;
        }

        .navbar-nav .nav-item {
            font-weight: bold;
            font-size: 17px;
            margin-left: 13px;
        }

        .navbar-nav .nav-link:hover::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -8px;
            height: 2px;
            background-color: white;
            border-radius: 1px;
        }



        .btn-group {
            margin-left: 10px;
            color: white;
        }

        .btn-group a button {
            margin-left: 10px;
            color: white;
        }

        /* Flex container for image and card */
        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }

        /* Image styling */
        .imag {
            background-image: url('images/register.png');
            background-repeat: no-repeat;
            background-size: cover;
            width: 500px;
            height: 600px;
            margin-bottom: 120px;
        }

        /* Card styling */
        .card1-student {
            display: flex;
            justify-content: flex-end;
        }

        .card1-student .card-student {
            width: 450px;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-right: 190px;
            margin-top: -45%;

        }

        .card1-student button {
            color: white;
            border: none;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: lighter;
            margin-bottom: 40px;
        }

        .account a {
            text-decoration: none;
            color: #fff;
        }

        .account button {
            width: 200px;
            height: 50px;
            margin-left: 88px;
            margin-top: 20px;
        }

        p a:hover {
            text-decoration: none;
        }

        .register a {
            text-decoration: none;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .card-body-student {
            padding: 20px;
        }

        .card-body-student small {
            display: block;
            margin-bottom: 10px;
        }

        .card-body-student input[type="checkbox"] {
            margin-right: 10px;
        }



        .buttons {
            display: inline-flex;
            margin-top: 20px;
            gap: 30px;
        }

        .buttons button {
            color: black;
            display: inline-flex;
            gap: 10px;
            box-shadow: rgba(0, 0, 0, 0.5) 3px 3px 6px;
            border-radius: 10px;
            height: 40px;
            padding: 10px;
        }

        .buttons button:hover {
            transform: translatey(-0.10em);
        }

        .buttons {
            display: flex;
            justify-content: center;
        }

        .txt {
            display: inline;
            justify-content: center;
            text-align: center;
            align-items: center;
            color: rgba(101, 99, 99, 0.765);
            font-size: 13px;
        }

        .input-icon {
            position: relative;
            margin-bottom: 10px;
        }

        .input-icon i {
            position: absolute;
            top: 44%;
            left: 10px;
            transform: translateY(-50%);
            color: #999;
        }

        .input-icon input {
            width: 100%;
            padding: 10px 10px 10px 35px;
            /* Padding adjusted to fit the icon */
            border-radius: 5px;
            border: 1px solid #ccc;
            box-shadow: rgba(0, 0, 0, 0.5) 1px 1px 3px;
        }

        .input-icon.password {
            padding-right: 35px;
            /* Padding for the eye icon */
            width: 110%;
        }

        .input-icon .eye-icon {
            position: absolute;
            top: 50%;
            /* right: 100px; */
            /* transform: translateY(-10%); */
            /*transform: translateX(1850%);*/
            margin-top: -10px;
            cursor: pointer;
            color: #999;
            transform: translateX(324px)
        }

        .content #bold {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 13px;
            font-weight: bold;
        }

        .content small {
            font-size: 13.6px;
            color: #827f7f;
        }

        .checkbox #tc {
            /* transform: translateY(26px); */
        }

        .checkbox label {
            transform: translateX(19px);
        }

        .checkbox label a {
            text-decoration: none;
            font-size: 14px;
        }

        #login p {
            font-size: 17px;
            font-family: sans-serif;
            color: #827f7f;

        }

        /* //footer */

        .footer {
            background-color: #1652b4;
            color: white;
            padding: 40px 0;

        }

        .footer ul li a {
            display: inline-block;
        }

        .footer-column h2 {
            font-weight: 550;
            margin-left: 32px;
            font-size: larger;
        }

        .container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .footer-column .line ul li a {
            font-weight: 550;
            font-size: larger;
            max-width: 400px;
        }




        .footer-column .line h3:hover,
        .footer-column .line ul li a:hover::after {

            position: absolute;
            left: 0;
            width: 100%;
            height: 10px;
            background-color: #000;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .footer-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* .footer-column {
              width: 100%;
              max-width: 270px;
              margin-bottom: 30px;
            } */

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
            margin-left: 30px;
        }

        /* .line-h3
            {
               text-decoration: none;
               color: #fff;
            } */

        .footer-column p,
        .footer-column ul {
            margin-bottom: 15px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            width: 200px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            text-decoration: none;
            transition: color 0.3s color 0.3s;
            padding: 0px 6px;
        }

        .li .social-icons {
            display: flex;
            gap: 10px;
        }


        .social-icons a:hover {

            background-color: #fff;
            /* Background color on hover */
            color: #003399;

        }


        .copyright {
            padding: 2px;
            margin-top: 50px;
            margin-left: 43%;

        }

        .footer .footer-column h2,
        .footer .footer-column h3 {
            margin-left: 42px;
        }




        .container1 {
            padding-left: 15px;
            /* Add some padding to left and right of container */
            padding-right: 15px;
        }

        /* Mobile First Approach for screens up to 576px */
        @media (max-width: 576px) {

            /* Navbar */
            .navbar-nav {
                flex-direction: column;
                text-align: center;
            }

            .navbar-nav .nav-link {
                padding: 10px;
                font-size: 14px;
                /* Adjust font size for smaller screens */
            }

            /* Remove background image on mobile */
            .imag {
                display: none;
            }

            /* Card Styling */
            .card1-student .card-student {
                width: 100%;
                margin-right: 0;
                margin-top: 0;
            }

            .content {
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            /* Buttons adjustments */
            .buttons {
                flex-direction: column;
                gap: 10px;
            }

            .account button {
                width: 100%;
                margin-left: 0;
                margin-top: 15px;
                font-size: 14px;
                /* Adjust font size for smaller screens */
            }

            /* Input Icon (Eye button inside password field) */
            .input-icon .eye-icon {
                right: 10px;
                top: 50%;
                margin-left: 70%;
                transform: translateY(-50%);
            }

            .input-icon {
                position: relative;
                width: 100%;
                /* Ensure the input container takes full width */
            }

            .input-icon input {
                width: 100%;
                /* Make input field take full width */
                padding: 10px 40px;
                /* Add padding to avoid input text sticking to edges */
            }

            #password-input {
                max-width: 100%;
            }

            /* Footer adjustments */
            .footer-row {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-column {
                width: 100%;
                max-width: none;
                margin-bottom: 20px;
            }

            .footer-column h3,
            .footer-column h2 {
                font-size: 16px;
                text-align: center;
            }

            .footer-column ul li a {
                font-size: 13px;
            }

            .footer {
                max-width: 100%;
            }

            .container1 {
                margin-left: -30px;
            }

            .copyright {
                margin-left: 35px;
            }
        }

        /* Mobile First Approach for screens up to 767px */
        @media (max-width: 767px) {

            /* Navbar */
            .navbar-nav {
                flex-direction: column;
                text-align: center;
            }

            .navbar-nav .nav-link {
                padding: 10px;
                font-size: 15px;
                /* Adjust font size for slightly bigger mobile screens */
            }

            /* Remove background image on mobile */
            .imag {
                display: none;
            }

            /* Card Styling */
            .card1-student .card-student {
                width: 100%;
                margin-right: 0;
                margin-top: 0;
            }

            .content {
                flex-direction: column;
                align-items: center;
                padding: 15px;
            }

            /* Buttons adjustments */
            .buttons {
                flex-direction: column;
                gap: 15px;
            }

            .account button {
                width: 100%;
                margin-left: 0;
                margin-top: 15px;
                font-size: 15px;
                /* Adjust font size for slightly bigger mobile screens */
            }

            /* Input Icon (Eye button inside password field) */
            .input-icon .eye-icon {
                right: 10px;
                top: 50%;
                margin-left: 75%;
                transform: translateY(-50%);
            }

            .input-icon {
                position: relative;
                width: 100%;
                /* Ensure the input container takes full width */
            }

            .input-icon input {
                width: 100%;
                /* Ensure input field is 100% width */
                padding: 10px 40px;
            }

            #password-input {
                width: 100%;
            }

            /* Footer adjustments */
            .footer-row {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-column {
                width: 100%;
                max-width: none;
                margin-bottom: 20px;
            }

            .footer-column h3,
            .footer-column h2 {
                font-size: 17px;
                text-align: center;
            }

            .footer-column ul li a {
                font-size: 14px;
            }

            .footer {
                max-width: 100%;
            }

            .container1 {
                margin-left: -40px;
            }

            .copyright {
                margin-left: 40px;
            }
        }


        /* Mobile First Approach */
        @media (max-width: 768px) {


            /* Increase height of navbar when expanded */
            .navbar-collapse.collapse.show {

                height: 350px;
                /* Adjust the height automatically */
                padding: -20px;
                z-index: 1000;
                border: none;

            }


            .navbar-collapse {
                overflow: hidden;
                /* Ensure content does not overflow */
                transition: max-height 0.3s ease-in-out;
                /* Smooth transition */
                background-color: #1652b4;
                /* Same color as navbar */
                width: 100%;
            }

            /* Navbar items on mobile */
            .navbar-nav {
                display: flex;
                flex-direction: column;
                /* Stack items vertically */
                text-align: center;
                /* Center align text */
                background-color: #1652b4;
                /* Same as navbar color */
                padding-top: 10px;
                /* Add space at the top */
                border: none;

            }

            .navbar-nav .nav-item {
                padding: 10px 0;
                /* Add space between items */
            }

            .navbar-nav .nav-link {
                color: white;
                /* White color for the text */
                font-size: 18px;
                /* Adjust font size for readability */
            }

            /* Button adjustment for mobile screens */
            .login-signup {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
                margin-top: 20px;
            }

            .login-signup .btn {
                width: 80%;
                /* Make buttons full-width on mobile */
            }


            /* .navbar-nav {
                    flex-direction: column;
                    text-align: center;
                }

                .navbar-nav .nav-link {
                    padding: 10px;
                }
                 */

            .container-fluid {
                text-align: center;
                padding-left: -20%;
            }


            /* Card Styling */
            .card1-student .card-student {
                width: 100%;
                margin-right: 0;
                margin-top: 0;
            }

            .content {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            /* Facebook/Google button and logo centering */
            .social-login {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 15px;
                text-align: center;
                margin-top: 20px;
            }

            .social-login img {
                max-width: 30px;
                margin-bottom: 5px;
            }

            /* Buttons adjustments */
            .buttons {
                flex-direction: column;
                gap: 10px;
            }

            .buttons button a {
                text-align: center;
                padding-left: 80px;
            }

            .account button {
                width: 100%;
                margin-left: 0;
                margin-top: 20px;
            }

            /* Input Icon (Eye button inside password field) */
            .input-icon {
                position: relative;
                width: 100%;
                /* Ensure the input container takes full width */
            }

            .input-icon input {
                width: 100%;
                /* Ensure input field is 100% width */
                padding: 10px 40px;
            }


            .input-icon .eye-icon {
                position: absolute;
                right: 10px;
                /* Align the eye icon inside the password container */
                top: 57%;
                transform: translateY(-50%);
                cursor: pointer;
                margin-left: 77%;
            }


            #password-input {
                max-width: 100%;
            }

            .footer-row {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-column {
                width: 100%;
                max-width: none;
                margin-bottom: 20px;
            }

            .footer-column .navbar-brand {
                justify-content: center;
                text-align: center;
                margin-left: 5%;
            }

            #footer-logo p {
                margin-left: 20px;
            }

            .footer-column h3,
            .footer-column h2 {
                font-size: 18px;
                text-align: center;
            }

            .footer-column ul li a {
                font-size: 14px;
            }


            .footer {
                max-width: 100%;
            }

            .container1 {
                margin-left: -50px;
            }

            .copyright {
                margin-left: 45px;
            }
        }

        /* Tablet (portrait) */
        @media (min-width: 769px) and (max-width: 1024px) {

            /* Centering and stacking navbar items */
            .navbar-nav {
                flex-direction: column;
                align-items: center;
                margin: 0;
                padding: 0;
                gap: 10px;
            }

            .navbar-nav .nav-item {
                width: 100%;
                text-align: center;
                padding: 5px 0;
            }

            /* Styling login and register buttons */
            .login-signup {
                display: flex;
                justify-content: center;
                gap: 10px;
                padding-top: 10px;
            }

            .login-signup .btn {
                flex: 0 0 auto;
                padding: 8px 16px;
                font-size: 14px;
            }

            /* Navbar toggler adjustments */
            .navbar-toggler {
                margin-right: 10px;
            }



            /* Navbar */
            .navbar-nav {
                flex-direction: row;
                text-align: center;
            }

            .login-signup {
                margin-left: 100px;
                margin-bottom: 20px;
            }

            /* Image Styling */


            /* Card Styling */
            .card1-student .card-student {
                width: 80%;
                transform: translateX(96px);
                margin-top: 100px;
            }

            .content {
                padding: 40px;
            }

            .buttons {
                display: flex;
                align-items: center;
                gap: 40px;

            }

            .footer-row {
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .footer-column {
                width: 25%;
                text-align: justify;
            }

            .footer-column h3 {
                font-size: 18px;
                margin-bottom: 10px;
            }

            .footer-column ul li a {
                font-size: 15px;
            }

            #password-input {
                max-width: 97%;
            }

            .input-icon .eye-icon {
                padding-left: 187px;
            }

            .account {
                margin-left: 92px;
            }
        }

        /* Desktop */
        @media (min-width: 1025px) {

            /* Navbar */
            .navbar-nav {
                flex-direction: row;
            }



            /* Card Styling */
            .card1-student .card-student {
                width: 450px;
                margin-right: 190px;
                margin-top: -45%;
            }

            .content {
                padding: 50px;
            }

            .footer-row {
                justify-content: space-between;
            }

            .footer-column {
                width: 22%;
            }

            .footer-column h3 {
                font-size: 18px;
                margin-bottom: 20px;
            }

            .footer-column ul li a {
                font-size: 16px;
            }
        }

        .error-msg {
            font-size: 12px;
            color: red;
            display: block;
        }
    </style>


    <div class="conten">
        <br><br><br><br>
        <!-- Left side image -->
        <div class="imag">
        </div>

        <!-- Right side card -->
        <div class="card1-student">
            <div class="card-student">
                <small class="txt">Sign up with</small>
                <div class="card-body-student">
                    <div class="buttons">
                        <button> <a href="#" aria-label="Facebook" target="_blank"><i
                                    class="fab fa-facebook"></i></a>Facebook</button>
                        <button> <a href="#" aria-label="Google" target="_blank" id="google"><i
                                    class="fa-brands fa-google"></i></a>Google</button>
                    </div>

                    <small class="txt">Or Sign up with email</small>

                    <form id="student-register-form">
                        <div class="input-icon">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>

                        <div class="input-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>

                        <div class="input-icon password">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="password-input" placeholder="Your Password" required>
                            <i class="fas fa-eye eye-icon" id="toggle-password"></i>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" name="tc" id="tc" required>
                            <label for="tc">I agree to the Terms and Conditions</label>
                        </div>

                        <div class="account">
                            <button type="submit" class="btn btn-primary" id="btn1">Create Account</button>
                        </div>
                    </form>

                    <div id="login">
                        <p>Already have an account? <a href="student_login.html"> Login</a></p>
                    </div>
                    <small>*If you are a minor in your jurisdiction, your parent or legal guardian must agree to the above
                        terms.</small><br>

                    <div class="register">
                        <a href="partner_registration.html">Register as a Recruitment Partner</a><br><br>
                        <a href="Institutions.html">Register as a Partner School</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('student-register-form').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = {
                name: form.name.value,
                email: form.email.value,
                password: form.password.value,
                tc: form.tc.checked
            };

            try {
                const response = await fetch('/api/student/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();
                if (response.ok) {
                    alert("Registration successful!");
                    form.reset();
                    window.location.href = '/'; // Redirect to homepage after success
                } else {
                    if (data.errors) {
                        alert("Error: " + JSON.stringify(data.errors));
                    } else {
                        alert("Error: " + data.message);
                    }
                }
            } catch (error) {
                alert("Something went wrong!");
                console.error(error);
            }
        });
    </script>


@endsection
