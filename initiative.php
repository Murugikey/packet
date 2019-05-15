<!DOCTYPE html>
<html lang="en">
<head>
  <!-- kimani on work - No Copyright -->
  <title>One Packet Initiative
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #808080;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #33688b;
    color: #13146b;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: rgb(55, 97, 145);
    color: rgba(255, 255, 255, 0.534) !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #225c83;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #2e60aa !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #44587e;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">One Packet Initiative</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">ONE PACKET</a></li>
        <li><a href="#tour">THE JOURNEY</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE -->
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="girls.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LOVE</h3>
          <p>WE STANDING FOR THE INITIATIVE TOGETHER.</p>
        </div>      
      </div>
        <!-- <div class="item">
          <img src="packet.jpg" alt="STREETS" width="1200" height="1000">
          <div class="carousel-caption">
            <h3>LOVE</h3>
            <p>TURN DRY LEAVES TO LIFE .</p>
          </div>      
        </div> -->

      <div class="item">
        <img src="dir.webp" alt="KENYAN STREETS" width="1200" height="700">
        <div class="carousel-caption">
          <h3>HAPPINESS</h3>
          <p>THE SMILES FULFILLS OUR LIVES.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="women.jpg" alt="WOMEN LIVE MATTERS" width="1200" height="700">
        <div class="carousel-caption">
          <h3>COMMITED TO A COURSE </h3>
          <p>CHANGING AND TOUCHING A STREET KID AND WOMEN LIVES ONE BY ONE!!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>ONE PACKET INITIATIVE</h3>
  <p><em>CHANGE AND TOUCHING A LIFE</em></p>
  <p><b>WHEN PEOPLE COME TOGETHER WITH THE LEAST THEY GOT AND WITH GOOD INTENTIONS,THEY SURELY MAKE AN IMPACT TO CHANGING LIVES.ONE PACKET INITIATIVE HAS CREATED THAT PLATFORM WHEREBY ANYONE WITH ANYTHING THE VERY LEAST CAN COME WAY FORWARD AND COMMIT EITHER TIME ,CONTRIBUTIONS OR PHYSICALLY PRESENT A PAD(MENSTRUAL PADS)FOR THE SAKE OF STREET KIDS AND WOMEN WHO GOT NO ONE TO LOOK OR CATER THIS TYPE OF NEEDS.THE IDEA WAS BORN BY HUMBLE CAMPUS GIRLS LED BY CAROLINE WAITHERA-THE INITIATOR AND ABIGAEL TO FORTHCOME AND BRING PEOPLE TOGETHER FOR A DIRE COURSE TO CHANGE A LIFE AND SURE HAVE CHANGED IN A BIG WAY .WE ALL AS AN ENTITY IN THIS UNIVERSE IN ONE WAY OR ANOTHER ARE SUBJECTED TO CREATING A BETTER WORLD THAN THE ONE WE FOUND. HENCE WE ALL CAN COME FOURTH TO JOIN HANDS AND TOUCH A WOMAN OR A KID. <br> <a href>#STREETKIDSMATTER</a> <a href>#WOMENLIVESMATTER</a> <a href>#ALWAYS</a> <a href>#ONEPACKETINITIATIVE</a> <a href>#CHANGEALIFE #TOUCHALIFE</a> <br>  <p>For more info visit our donating website: <a href="https://secure.changa.co.ke/myweb/share/32053" data-toggle="tooltip" title="Visit w3schools">www.onepacketchanga.com</a></p>   </b></p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>MEMBERS IN ACTION</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="save.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>With the membership full of youthful energy</p>
        <p>Creating an impact with the little we have</p>
        <p>Changing and touching lives</p>
        <p>Walk with us in this journey</p>
        </p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>DONATE TO THE COURSE</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="donate.jpg" class="img-circle person" alt="donate" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Donate </p>
        <p><b><strong>Inception of Change</b></strong></p>
        <p>The initiative being at its tender age the idea and passion still remains change and touch a life</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>TOUCHING LIVES</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="dir.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Change</p>
        <p>Touch</p>
        <p>Sacrifice</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">OUR EVENT PLANS, INVITE A FRIEND!!<br> #SOTETWABADILISHA</h3>
    <p class="text-center">WE ALWAYS GET TO DISTRIBUTE WHAT WE HAVE COLLECTED IN ETERNITY OF A MONTH EACH MONTH.<br> You can give from a packet(Kshs 50) or anything inform of pads and even food to give to kids. Touch lives by our generosity</p>
    <ul class="list-group">
      <li class="list-group-item">MARCH 26th <span class="label label-danger">FIRST PROJECT, WHOOPS!!ALREADY DONE</span></li>
      <li class="list-group-item">MAY 25th <span class="label label-danger">STILL ONCOMING SOON!!!!!</span></li> 
      <li class="list-group-item">IN PLANNING <span class="badge">WE GOT TO DO THIS!!</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="donate.jpg" alt="Touch and Change" width="400" height="100">
          <p><strong>Jevanjee Gardens</strong></p>
          <p>MARCH 25th 2019</p>
          <!-- <button class="btn" data-toggle="modal" data-target="#myModal">DONATE</button> -->
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="save.jpg" alt="ACCRA" width="400" height="300">
          <p><strong>NYOTA BUILDING,ACCRA ROAD</strong></p>
          <p>MARCH 25th 2019</p>
          <!-- <button class="btn" data-toggle="modal" data-target="#myModal">Hand Physically to our storage</button> -->
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="dir.jpg" alt="Donate" width="400" height="300">
          <p><strong>Jevanjee Garden</strong></p>
          <p>MARCH 25th 2019</p>
          <!-- <button class="btn" data-toggle="modal" data-target="#myModal">CONTRIBUTE</button> -->
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> DONATE</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="username" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>TOGETHER FOR THE STREET KIDS AND WOMEN</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Give us feedback.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Nyota building, ACCRA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +254705883678</p>
      <p><span class="glyphicon glyphicon-envelope"></span>carolinewaithera@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Organising Team</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Caroline-INITIATOR</a></li>
    <li><a data-toggle="tab" href="#menu1">Abigael- Controller</a></li>
    <li><a data-toggle="tab" href="#menu2">Martin-Behind The Shadows</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Caroline Waithera, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to 25th MARCH.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Abigael Gatheru, Controller</h2>
      <p>Always a pleasure people to sacrifice and have to change lives, Lets do this!!</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Martin Kimani, Behind the scenes</h2>
      <p>I mean, all the time, am pertubed by people generosity and the push to get it bigger abd better is the aim of the group. GOD BLESS.</p>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>More to support the initiative visit <a href="https://secure.changa.co.ke/myweb/share/32053" data-toggle="tooltip" title="Visit w3schools">www.onepacketchanga.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
