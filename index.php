<!DOCTYPE html>
<html lang="en">
<head>
  
 <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

.navbar-default {
  background-color: #13829b;
  border-color: #29d2e4;
  opacity: 0.9;
}
.navbar-default .navbar-brand {
  color: #ecf0f1;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #fde9c9;
}
.navbar-default .navbar-text {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #fde9c9;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #fde9c9;
  background-color: #29d2e4;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #fde9c9;
  background-color: #29d2e4;
}
.navbar-default .navbar-toggle {
  border-color: #29d2e4;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #29d2e4;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ecf0f1;
}
.navbar-default .navbar-link {
  color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
  color: #fde9c9;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fde9c9;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fde9c9;
    background-color: #29d2e4;
  }
}
  .carousel-caption h1 {
      color: #111 !important;
    top: 50%;
transform: translateY(-50%);
  }

.carousel-inner>.item>img
{
  
  margin: auto;
 /* width:100%;
  height:800px;
  */
  height:100%;
  
  

}
.slider-size
{
  height:800px;
}
form .btn:hover,form .btn:focus
{
  background-color: #29d2e4;
}

.photo
{
  border: 5px transparent;
  margin:auto;
  width: 50%;
  height: 50%;

}
.photo:hover
{
  border: 10px solid #ecf0f1;
}
.body
{
  font-family:Lato,sans-serif;
  font-size: 20px;
  background-color:#fde9c9; 

}
.h1
{
  font-family:Lato,sans-serif;
  font-size: 15px;
  padding: 20px 20px;
}
.h3
{ 
   color: #13829b !important;
  font-family:Lato,sans-serif;
  font-size: 7px;
}
.mycontainer
{
  padding: 30px 80px;
  margin-bottom: 50px;
  margin-top: 30px;
  letter-spacing: 1px;
}
.btn
{
  background-color: #13829b; 
  border-color: #29d2e4;
}
.footer
{
   background-color: #13829b; 
   color:#ecf0f1;
   font-family:Lato,sans-serif;
  font-size: 15px;
  padding: 20px 20px;
  margin-top: 50px;
}
  </style>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="20" id="homepage">

<!-- navbar creation -->
<nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container-fluid">
    <!--header for the nav bar-->
    <div class="navbar-header">
      <a href="#" class="navbar-brand">Gym Community</a>
    </div>
    <!--other list elements of the nav bar-->
    <ul class="nav navbar-nav">
      <li class="active"><a href="#homepage" >Home</a></li>
      <li><a href="#aboutus">About us</a></li>
      <li><a href="#">Sports</a></li>
      <li><a href="#">Online shop</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
    <!-- list elements shifted to the right -->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#signin_modal" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> Sign in</a></li>
    </ul>
  </div>
</nav>

<!--carousel creation-->
<div class="carousel slide" id="mycarousel" data-ride="carousel">

  <!--carousel indicators-->
    <ol class="carousel-indicators">
      <li data-target="#mycarousel" data-slide-to="0" class="active"></li> 
      <li data-target="#mycarousel" data-slide-to="1" ></li>
      <li data-target="#mycarousel" data-slide-to="2"></li>
    </ol>

  <!--carousel wrapper for slides-->
    <div class="carousel-inner" role="listbox">
      
      <div class="item active">
        <!--<div class="slider-size">-->
        <img src="./images/first/45158-O4HHLS copy 2.jpg" alt="stopthinking" >
     <!-- </div>-->
        <div class="carousel-caption ">
          <h1>Join our community</h1>
        </div>
      </div>
      <div class="item">
       <!--<div class="slider-size">-->
        <img src="./images/second/79754-OGP3O5-407 copy.jpg"  >
      <!-- </div>-->
      </div>
      <div class="item">
        <!--<div class="slider-size">-->
        <img src="./images/Fitness-tools-pack/35298-O00M0U copy.jpg" >
      <!-- </div>-->
        <div class="carousel-caption ">
          <h1>Buy Our products</h1>
        </div>
      </div>
    </div>

  <!--carousel control-->
  <a class="left carousel-control" href="#mycarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">next</span>
  </a>



</div>
<!-- Create sign in modal-->

<div class="modal fade" id="signin_modal" >
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button class="close" data-dismiss="modal">x</button>
      <h4 class="modal-title">Sign In</h4>
      
    </div>
    <div class="modal-body">
      <form action="" >

        <div class="form-group">
          <label for="#username">Username: </label>
          <input type="text" class="form-control" id="username" required>
        </div>
        <div class="form-group">
          <label for="#password">Password: </label>
          <input type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-success" style="background-color: #13829b; border-color: #29d2e4">Sign In</button>

      </form>  
    </div>


  </div>
  </div>

  </div>
  
  <!--Create about us container-->
  <div class="container-fluid text-center mycontainer" id="aboutus" >
    <h1 ><strong>About us</strong></h1>
    <p>This website offers you the unique experience of keeping in touch
   with your gym instructor and mates.</p>
   <p>You can join groups related to 
   your sport of interest and share posts with your friends.You can 
   even rate your instructor and receive reports to keep track of your 
   performance in the gym.</p>
   <p>In addition,you can track your weight and see
   how close you are to your target weight. </p>
   <h3><em>What are you waiting for ?  Join us now !</em></h3>
 </p>




  </div>
  <!-- Create Contact us and newsletter subscription-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 " >
          

        <h3 class="text-center"><strong>Contact us</strong></h3>


<a href="#contactus" data-toggle="collapse"><img src="./images/contactus/contactus.jpg" class="img-circle img-responsive photo" ></a>
<div class="collapse" id="contactus" >
<!--<div class="col-md-4 " style="margin:50px 20px 50px 0px;" >-->
  <span class="glyphicon glyphicon-phone"> Phone: +010022344560</span>
  <br>
  <span class="glyphicon glyphicon-envelope"> Email: gym_mail@gmail.com</span>
  <br>
  <span class="glyphicon glyphicon-map-marker"> Cairo,Egypt</span>
<!--</div>-->
<!--<div class="col-md-8">-->
<form action="" method="post"  >
  <div class="form-group">
<label for="#type">Choose</label>
<select id="type" class="form-control">
  <option>Question</option>
  <option>Feedback</option>
  <option>Complaint</option>
</select>
</div>
<div class="form-group">
<label for="#content">Content</label>
<textarea id="content" rows="10" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-success" >Send</button>
</form>
<!--</div>-->
</div>
      </div>
      <div class="col-md-6 ">
        <h3 class="text-center"><strong>Newsletter Subscription</strong></h3>
        <a href="#newsletter" data-toggle="collapse"><img src="./images/newsletter.jpg" class="img-circle img-responsive photo" ></a>
        <form action="" method="post" class="collapse" id="newsletter">
          <div class="form-group">
              <label for="#news_name">Name </label>
              <input type="text" class="form-control" id="news_name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
              <label for="#news_email">E-mail </label>
              <input type="email" class="form-control" id="news_email" placeholder="Enter your email" required>
          </div>
          <button type="submit" class="btn btn-success" >Send</button>
        </form>

      </div>
    </div>


  </div>
<footer class="footer text-center">
  <a href="#homepage" data-toogle="tooltip" Title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a>
<p>Created by Bat-code Team, Faculty of engineering, Cairo University</p>
</footer>


</body>






</html>

