<!DOCTYPE html>
<html>
<head>
	<title>
		Online Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<style type="text/css">

	html, body {

        overflow-x: hidden;
        margin: 0;
        padding: 0;
        width: 100%;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 30px;
        position: absolute;
        top: 0;
        width: 100%;
        max-width: 1430px;
        margin: 0 auto;
        transform: translateY(-10px);
    }
    
	.logo {
        display: flex;
        align-items: center;
        margin-left: -50px;
    }
    .logo h1 {
        color: rgb(97, 2, 170);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }
    .logo img {
        vertical-align: middle;
    }

	nav ul
	{	
		
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav ul li 
	{
		display: inline-block;
		line-height: 80px;
	}

	.button {
            
            
            padding: 10px 20px;
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners */
        }
    .button:hover {
            background-color: #45a049; /* Darker green on hover */
        }


	.box{
		background-color: white;
		padding:20px;
		border-radius: 8px;
		box-shadow: 0 4px 10px rgba(0,0,0,0.1);
		width: 400px;
		text-align: center;
		
	}


	body {	
			display: flex;
			display: flex;
            justify-content: center;
            align-items: center;

            background-image: url('https://c4.wallpaperflare.com/wallpaper/526/8/1002/library-interior-interior-design-books-wallpaper-preview.jpg'); /* Replace with your image path */
            background-size: cover; /* Make sure the image covers the entire background */
            /* background-position: center; Center the image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            height: 100vh; /* Make sure the body takes up the full height of the viewport */
			margin: 0;

			padding: 0;
           
            flex-direction: column; 	
        }
	
	.slideshow-container {
        position: absolute;;
        width: 720px;
        height: 405px;
        margin: auto;

		top: 60%; /* Centers it vertically */
        right: 40px; /* Aligns it to the right */
        transform: translateY(-50%);
        margin-top: 80px; /* Adds space below header to avoid overlap */
    }

    .mySlides {
        display: none;
    }

    .mySlides img {
            width: 700px;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 35%;
        width: auto;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }
	

	.dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

	footer {
            
			/* background-color: blueviolet; */
            color: white; */
            text-align: center;
            padding: 10px 0;
            position:absolute ;
            margin-top: auto;  
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);


			/* Pushes the footer to the bottom */
        }


	/* p {
            margin: 0;

     } */


	
</style>


</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="logo-removebg-preview.png" width="150px">
			<h1 style="color: white;">SCRIPTORIUM</h1>
		</div>
			<nav>
				<ul>
					<li><a href="index.php" class="button">HOME</a></li>
					<li><a href="books.php" class="button">BOOKS</a></li>
					<li><a href="student_login.php" class="button">USER-LOGIN</a></li>
					<li><a href="admin_login.php"  class="button">ADMIN-LOGIN</a></li>
					<li><a href="register.php" class="button">SIGN-UP</a></li>

				
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 50px; ">SCRIPTORIUM</h1><br><br>
				<h1 style="text-align: center; font-size: 35px;">Online Library Management System</h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Library Timings...</h1><br>
				<h1 style="text-align: center;font-size: 25px;">Opens at: 09:00 AM </h1><br>
				<h1 style="text-align: center;font-size: 25px;">Closes at: 04:00 PM </h1><br>
				
			</div>
		</div>

        <div class="slideshow" style="flex: 1;">
			<div class="slideshow-container">

				<div class="mySlides fade">
					<img src=https://www.simplilearn.com/ice9/free_resources_article_thumb/What_is_a_PMIS.jpg style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src=https://bluekeyit.com/wp-content/uploads/2022/12/cybersecurity.jpg style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src=https://www.linkzconnect.com/wp-content/uploads/2024/03/Data-Analytics.jpg style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src=https://www.tech-field.com/wp-content/uploads/2022/09/Network-Management-Services.jpg style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src=https://okcredit-blog-images-prod.storage.googleapis.com/2021/03/Software-Development-Business1--1-.jpg style="width:100%">
				</div>
				<div class="mySlides fade">
					<img src=https://t2informatik.de/en/wp-content/uploads/sites/2/2024/01/application-development.jpg style="width:100%">
				</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				<span class="dot" onclick="currentSlide(4)"></span>
				<span class="dot" onclick="currentSlide(5)"></span>
				<span class="dot" onclick="currentSlide(6)"></span>
			</div>
		</div>

		</section>
		
		
		
	</div>
	<footer>
		<p>
			<br><br>
			Email: Online.library@gmail.com <br>
			Mobile: +91**********
		</p>
	</footer>

	<script>
        let slideIndex = 1;
showSlides(slideIndex);

// Function to increment or decrement slides
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Function to show a specific slide
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Function to display the slide based on the slide index
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

// Automatically change slides every 3 seconds
setInterval(() => {
    plusSlides(1); // Move to the next slide
}, 2500); // 3000 milliseconds = 3 seconds

        </script>


</body>

</html>