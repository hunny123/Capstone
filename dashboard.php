<html>

<head>
  <title>Dashboard</title>
  <link rel="shortcut icon" href="logo__4__o32_icon.ico" />
  <!-- Font Awesome -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
  <style>
  body{
  	overflow-x: hidden;
  }
    .sidenav {
      
      position: fixed;
      width: 200px;
      top: 0;
      
      
    }
    .marginleft{
        transition: margin 0.5s ease;
    	margin-left: 0px;
    	margin-top: 0px;

    }
    .marginadd{
    	transition: margin 0.5s ease;
    	margin-left:200px;
    	margin-top: 0px;

    }
    .rowlink{
    	width:100%;
    	text-decoration:none;
    	color:white;
    	padding:10px;
    	display: block;
    	border-bottom:.5px solid lightgrey;
    }
    .rowsublink{
    	width:80%;
    	text-decoration:none;
    	color:white;
    	padding:10px;
    	display: block;
    	margin-left: 5px;
    	border-bottom:.5px solid lightgrey;
    }
    @media only screen and (min-width: 990px) {
    	.marginleft{
           margin-left: 250px;
    	}
    	.sidenav{
    		display:block!important;
    		width:250px;
    	}

  
}
  </style>
</head>
<script>
	$( document ).ready(function() {
		$(".sideshow").click(function(){
			$(".marginleft").toggleClass('marginadd');
			$(".sidenav ,.secondmenu").toggle(500);
		})
    
});
</script>
<body>

  <div class=" h-100 collapse  p-0 text-white  pink sidenav"  id="sideNav">
  	<div class="text-center card card-body mt-3 mx-auto  bg-light" style="width: 150px;">
  		<img src="svg/logo.svg" alt="Brand" width="80">
  		<img src="svg/name.svg" alt="Brand" width="100">
  	</div>
    <a href="#" class=" rowlink pink mt-4 " ><i class="fa fa-dashcube fa-md mx-2 "></i>DashBoard</a>
    <div class="accordion " id="accordionExample">
      <div class="bg-transparent">

        <div class=" collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <a class=" rowlink pink  " ><i class="fa mx-2 fa-lg fa-stethoscope"></i>Hsms Navigation<i class="fa float-right fa-caret-down"></i></a>
        </div>

        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="">
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
          </div>
        </div>
      </div>
      <div class="">

        <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <a class=" rowlink pink  " ><i class="fa mx-2 fa-lg fa-stethoscope"></i>Hsms Navigation<i class="fa float-right fa-caret-down"></i></a>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
           <div class="">
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
          </div>
        </div>
      </div>
      <div class="">

        <div class="  collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <a class=" rowlink pink  " ><i class="fa mx-2 fa-lg fa-stethoscope"></i>Hsms Navigation<i class="fa float-right fa-caret-down"></i></a>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="">
            <div class="">
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
            <a href="#"class="rowsublink pink mx-2"><i class="fa fa-book"></i> Patient details</a>
          </div>
          </div>
        </div>
      </div>
    </div>

  </div>












<div class=" marginleft">
        <!--Navbar-->
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark pink">
		
  <!-- Navbar brand -->
  

  <!-- Collapse button -->
  <button class="navbar-toggler p-0 sideshow" style="margin-left: 0!important;" type="button" data-toggle="collapse" data-target="#sideNav"
    aria-controls="sideNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <a class=" navbar-brand  mr-auto ml-1 " href="#" >Dashboard</a>
   


   <button class="navbar-toggler secondmenu" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-ellipsis-v fa-lg"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->
  
  <!-- Collapsible content -->

	</nav>
<!--/.Navbar-->
        <div class="jumbotron-fluid text-center p-1 bg-light">


      <img src="https://media.licdn.com/dms/image/C5103AQE661EnmSQPtA/profile-displayphoto-shrink_200_200/0?e=1557964800&v=beta&t=flzNlsAARWuph59RHPoqt-Z29rBqWU5oatEMDalEFj4" class="mx-auto" style=" border-radius: 50%;height:150px;width: 150px">
      <h1 class="pink-text">Hunny</h1>

</div>





    <div class="container">
    	<div class="row bg-light">
    		<div class="col-lg-6 pink-text"><i class="fa fa-appointment"></i> <h1>Appointments</h1>
 <table class="table table-striped">
<tbody><tr> <th class="d2"> Time</th>
<th class="d2">Appointments</th>
<th class="d2">Room</th></tr>
<tr> <td class="d2"> 11:00am-12:30pm</td>
<td class="d2">Meeting with higher Authorities</td>
<td class="d2"> Meeting Hall 1</td>
</tr> <tr> <td class="d2"> 1:00pm-2:30pm</td>
<td class="d2">Appointment  with patient</td>
<td class="d2"> Block -302-(525)</td>
</tr><tr> <td class="d2"> 3:00pm-4:00pm</td>
<td class="d2">Meeting with Health professional</td>
<td class="d2"> Meeting Hall 145</td>

</tr></tbody></table> 	</div>
<div class="col-lg-6 pink-text"><i class="fa fa-appointment"></i> <h1>Appointments</h1>
 <table class="table table-striped">
<tbody><tr> <th class="d2"> Time</th>
<th class="d2">Appointments</th>
<th class="d2">Room</th></tr>
<tr> <td class="d2"> 11:00am-12:30pm</td>
<td class="d2">Meeting with higher Authorities</td>
<td class="d2"> Meeting Hall 1</td>
</tr> <tr> <td class="d2"> 1:00pm-2:30pm</td>
<td class="d2">Appointment  with patient</td>
<td class="d2"> Block -302-(525)</td>
</tr><tr> <td class="d2"> 3:00pm-4:00pm</td>
<td class="d2">Meeting with Health professional</td>
<td class="d2"> Meeting Hall 145</td>

</tr></tbody></table> 	</div></div>
    <div class="row ">
      
      <div class="col-sm-12">
      	<img src="https://s86vkjuqei14qm8e2sawxz2m-wpengine.netdna-ssl.com/wp-content/uploads/Dutta01_graph2a.png" class="w-100">
      </div>
    </div>
</div>
  </div>