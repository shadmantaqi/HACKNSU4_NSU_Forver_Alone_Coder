<!DOCTYPE html>
<html>

<head>
    <title>Bidding Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        header {
            width: 100%;
        }

        nav {
            width: 100%;
                }


        header img {
            width: 100%;
            height: calc(100vh - 60px);
            background-size: cover;
            background-repeat: no-repeat;
            object-fit: cover;
        }

        .section h1 {
            margin: 40px 0px;
            text-align: center;
            font-weight: 600;
        }

        table {
            width: 480px;
            font-size: 28px;
            margin: 20px auto;
            background-color: #e6f2ff;
            border-radius: 10px;
            padding: 10px;
        }

        table tr td button {
            padding: 5px 20px;
            font-size: 18px;
            background: #004d00;
            color: #fff;
            border: none;
            border-radius: 5px;
            margin: 5px;
        }

        @media screen and (max-width: 768px) {
            table {
                width: 320px;
                font-size: 24px;
                margin: 15px auto;
                border-radius: 10px;
                padding: 5px;
            }
        }

        @media screen and (max-width: 480px) {
            table {
                width: 250px;
                font-size: 18px;
                margin: 10px auto;
                border-radius: 10px;
                padding: 5px;
            }
        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
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

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    </style>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #4bcffa;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>

<body>
    <header>
        <nav>
        <ul>
  <li><a href="#home">Home</a></li>
  <li style="float:right"><a class="active" href="driver.php"><i class="fa fa-user-circle-o"></i></a></li>
</ul>
        </nav>

    </header>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="https://onde-website-bucket.s3.ap-south-1.amazonaws.com/site/content/blog/v1591187706/Blog_Post_01.jpg"
                style="width:100%">
            <div class="text">Hey! Need a Ride?</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="https://onde-website-bucket.s3.ap-south-1.amazonaws.com/site/content/blog/v1591187712/Blog_Post_02.jpg"
                style="width:100%">
            <div class="text">Enjoy the Ride!</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="https://onde-website-bucket.s3.ap-south-1.amazonaws.com/site/content/blog/v1591187717/Blog_Post_03.jpg"
                style="width:100%">
            <div class="text">Let's Go :)</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <div class="section">
    <button>Add New Schedule</button>
        <h1>
           Your Ride Schedule
        </h1>

        <table>
            <tr>             
                <td>Jatrabari to Uttara</td>
            </tr>
            <tr>  
                <td>Pick time: 7:00 AM</td>
            </tr>
            <tr>
                <td><button>Delete</button></td>
            </tr>
        </table>

        <table>
            <tr>             
                <td>Jatrabari to Uttara</td>
            </tr>
            <tr>  
                <td>Pick time: 7:00 AM</td>
            </tr>
            <tr>
                <td><button>Delete</button></td>
            </tr>
        </table>
        
    </div>
</body>

</html>