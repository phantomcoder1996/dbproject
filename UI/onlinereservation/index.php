<!DOCTYPE html>
<html lang="en">
<head>
  
 <title>Courses</title>
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


form .btn:hover,form .btn:focus
{
  background-color: #29d2e4;
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
.panel-heading
{
  color: #13829b !important; 
}
th{
background-color: #13829b;
}




  </style>

<script type="text/javascript">

$(document).ready(
  function()
    {
      //var formselect=document.getElementById('current_courses');
      //window.alert(<?php echo $hi?>);
    }
)
</script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="20" id="sports" background="../../images/Fitness-equipment-flat-style/35921-O0FAEZ.jpg">

<!-- navbar creation -->
<nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container-fluid">
    <!--header for the nav bar-->
    <div class="navbar-header">
      <a href="#" class="navbar-brand">Gym Community</a>
    </div>
    <!--other list elements of the nav bar-->
    <ul class="nav navbar-nav">
      <li ><a href="#homepage" >Home</a></li>
      <li><a href="#aboutus">About us</a></li>
      <li class="active"><a href="#sports">Sports</a></li>
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





<div class="container-fluid" style="margin-top:10%">
<form method="post" action="">

<div class="form-group">
  <label for="#current_courses">Current courses</label>
<select id="current_courses" class="form-control" onfocus="this.selectedIndex=-1;" onchange="getcoursesschedule(this.value);"></select>
</div>


</div>
<!--Table for displaying courses scedule-->

<div class="container-fluid" >  
<table id='coursestable' class="table table-bordered">

</table>
</div>

<!-- Display trainer name ,price and number of classes for the current course
<div>
  <label for="#classesno">Number of classes:</label>
  <input type="text" id="classesno" disabled></input>
<label for="#price">Price:</label>
  <input type="text" id="price" disabled></input>
  <label for="#trainername">Trainer Name:</label>
  <input type="text" id="trainername" disabled></input>
</div>

-->
<div class="container-fluid">
 <div class="panel panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Number of classes</div>
      <div class="panel-body" id="classesno"></div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Trainer name</div>
      <div class="panel-body" id="trainername"></div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">Price</div>
      <div class="panel-body" id="price"></div>
    </div>
  </div>
</div>
<input type="submit" class="btn btn-success" style="background-color: #13829b; border-color: #29d2e4; margin-left:50%;" value="Reserve"></input>
</form>

<script>
var courselist=document.getElementById("current_courses");
var xhttp;
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      
      var idsarray=JSON.parse(this.responseText);
      //window.alert(this.responseText);
      var size=idsarray.size;
      for(var i=0;i<size;i++)
      {
        var option=document.createElement("option");
        option.value=idsarray.ids[i];
        var count=i+1;
        option.text='course '+count;
        courselist.add(option,courselist[i]);
      }
    }
  }
  var url='../../phpfiles/onlinereservation?q="ids"';

  xmlhttp.open("GET",url,true);
  xmlhttp.send();
</script>


  
  <script>
  //issue another request to get courses schedule based on users selection
  // a function to be called by the on change event of courses list
 function getcoursesschedule(coursenum)
 { 
     //initiate a request to get schedule from data base
     var xhttp1=new XMLHttpRequest();

     xhttp1.onreadystatechange=function()
     {
      if(this.readyState==4 && this.status==200)
      {

        var schedule=JSON.parse(this.responseText);
        
        
        //create table for courses schedule
        var table=document.getElementById('coursestable');
         //first delete any existing table
         var size=table.rows.length;
         for(var i=0;i<size;i++)
         {
          table.deleteRow(0);
         }
        var tablehead=table.createTHead();
        var row=tablehead.insertRow(0);
        var cell1=row.insertCell(0);
        var cell2=row.insertCell(1);

        cell1.innerHTML="<b>Day</b>";
        cell2.innerHTML="<b>Time</b>";

         size=schedule.size;

        for(var i=1;i<=size;i++)
        { 
          var tablerow=table.insertRow(i);

          var cell1=tablerow.insertCell(0);
          var cell2=tablerow.insertCell(1);
          cell1.innerHTML=String(schedule.schedule[i-1].Day);
          
          cell2.innerHTML=String(schedule.schedule[i-1].Ctime);
         // window.alert(cell2.innerhtml);

        }
        //now get number of classes ,price and trainer name
       var classes= document.getElementById('classesno');
       classes.innerHTML=schedule.classesno;
       var trainername= document.getElementById('trainername');
       trainername.innerHTML=schedule.trainername;
       var price= document.getElementById('price');
       price.innerHTML=schedule.price;

         

      }
     }
     var url='../../phpfiles/onlinereservation?q="courseinfo"&courseid='+coursenum;
     xhttp1.open("GET",url,true);
     xhttp1.send();
   return;
 
  }
  




</script>

  </body>



  </html>
