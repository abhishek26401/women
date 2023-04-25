<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Women Safety Web</title>
</head>

<body>
    <!-- Head Section Start Here -->
    <div class="head-section">
        <nav>
            <h2 class="logo">WOMEN <span>SAFETY</span> Web</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="welcome1.php">View Contact</a></li>
                <li><a href="create.php">Add Contact</a></li>
                <li><a href="logout1.php">Logout</a></li>
                <!-- <li><a href="#profile">About</a></li> -->
            </ul>
        </nav>
    <!-- </div> -->


<!-- crousal -->
    
    <div class="container-fluid">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class=" carousel-item active" data-bs-interval="10000" style="height: 350px; overflow-y: hidden;">
              <img src="https://images.unsplash.com/photo-1558965509-228052befa6b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1931&q=80" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 style="OVERFLOW-Y: hidden; color: white;">Emergency Mail</h5>
                <button class="btn btn-danger">Women</button>
                <button class="btn btn-primary">Safety</button>
                <button class="btn btn-success">Web</button>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000" style="height: 350px; overflow-y: hidden;">
              <img src="https://images.unsplash.com/photo-1555371363-27a37f8e8c46?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 style="OVERFLOW-Y: hidden; color: white;">Live Location</h5>
              </div>
            </div>
            <div class="carousel-item" style="height: 350px; overflow-y: hidden;">
              <img src="https://images.unsplash.com/photo-1523365237953-9f36b3c8cada?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 style="OVERFLOW-Y: hidden; color: white;">Emergency Message</h5>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>


        <!-- emergency button -->

            <!-- Contact Section -->
    <div class="contact-me">
        <!-- <p>Know more by contacting us</p> -->
        <!-- <a href="#" class="button-two">Click for emergency</a> -->
        <button class="button-two" onclick="sendEmergencyMessage()">Send Emergency Message</button>

        <script>
          function sendEmergencyMessage() {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', 'mailsend.php', true);
          xhr.send();
          }

        </script>

    </div>

        

   

    <!-- footer start -->
    <footer>
        <p>Bitvengers</p>
        <p>Connect us through our social media handles</p>
        <div class="social">
            <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/login" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </div>
        <p class="copyright">Copyright &copy; 2023 Bitvengers </p>
    </footer>
    <script src="https://kit.fontawesome.com/b7cf440a8c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>