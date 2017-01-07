<!DOCTYPE html>
<html>

<head>
	<title>Fusion - UI Documentation</title>
	<!--Import Google Icon Font-->
	<!-- link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	 <link href="fonts/materialfont/material-icons.css" rel="stylesheet"/>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="fonts/font-awesome-4.6.3/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
	<link href="css/fusion_style.min.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> </head>

<body>

	
	<header>
		<nav>
			<div class="nav-wrapper"> <a href="#!" class="brand-logo">Fusion</a> <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#">Change Password</a>
					</li>
					<li><a href="/logout">Logout</a>
					</li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Link</a>
					</li>
					<li><a href="#">Link</a>
					</li>
					<li><a href="#">Link</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="sidebar">
		<ul id="slide-out" class="side-nav fixed">
                <li><a href="/dashboard" class="waves-effect">Dashboard</a></li>
                <li><a href="#!" class="waves-effect">Second Link</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link</a></li>
        </ul>
		
			
		</ul>
	</div>
	<div class="main-container row" style="background: none; border: none;">
		
		<div class="col s10 m10 l10 offset-l1 offset-s1 offset-m1">
		<br>
			<div class="card-panel blue-grey lighten-5 z-depth-2">
				
		<div class="row">
			<div class="col s12">
			  <ul class="tabs">
				<li class="tab col s3  blue-grey lighten-5"><a class="active"  href="#test1">Add Faculty</a></li>
				<li class="tab col s3  blue-grey lighten-5"><a href="#test2">Search</a></li>
				
			  </ul>
			</div>
			
					
							<div class="row" id="test1">
							<form class="col s12">
							<br><br>
							<!--text box for faculty id -->
							 <div class="row">
							 
								<div class="input-field col s6 offset-s1">
								  <input id="email" type="email" class="validate" required>
								  <label for="email">Faculty ID</label>
								</div>
							
							 </div>
							 <!--text box for Name -->
							 <div class="row">
							 
								<div class="input-field col s6 offset-s1">
								  <input id="email" type="email" class="validate" required>
								  <label for="email">Name</label>
								</div>
							
							 </div>
							 <!--text box for Sex-->
							 <div class="row">
							 
								<div class="input-field col s6 offset-s1">
								  <input id="email" type="email" class="validate" required>
								  <label for="email">Sex</label>
								</div>
							
							 </div>
							 <!--text box for Date Of Birth-->
							 <div class="row">
							 
								<div class="input-field col s6 offset-s1">
								  <input id="email" type="email" class="validate" required>
								  <label for="email">Date of Birth</label>
								</div>
							
							 </div>
							 <!--text box for Blood Group -->
							 <div class="row">
							 
								<div class="input-field col s6 offset-s1">
								  <input id="email" type="email" class="validate" required>
								  <label for="email">Blood Group</label>
								</div>
								
								
							
							 </div>
							 <div class="row">
							 <div class=" col s4 offset-s1">
							 <a type="Submit" href="#qualification"><h6 style="color:#0077B5">+ Add Employee </h6></a>
							 </div>
							 </div>
							</form>	
						  </div>
						  
						  
						  <div class="row" id="test2">
						  <br><br><br><br>
						   
								   <center><h5> Search for Works of Faculties </h5></center>
								  
								  <form  class="col s12" id="form-shower" name="x" method="POST" >
									<select class="browser-default" id="myselect" required>
									<option value="" disabled selected>Search By</option>
									<option value="form_name1">Faculty Id</option>
									<option value="form_name2">Year</option>
									<option value="form_name3">Discipline</option>
									</select>
									
									</form>

									<form class="col s12" name="form_name1" id="form_name1" style="display:none" action="/new" method="POST">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label>Enter Faculty Id</label>
									<!---- THIS IS FORM 1---->
									<input type="text" name="fac_id" class="validate" required>
									
									<select class="browser-default" name="sfor" required>
									<option value="" disabled selected>Search For</option>
									<option value="1">Research Projects</option>
									<option value="2">Publications</option>
									<option value="3">Thesis</option>
									<option value="4">Conferences</option>
									</select> 
									
									<button type="submit" class="btn">Search</button>
									</form>

									<form class="col s12" name="form_name2" id="form_name2" style="display:none" action="/new" method="POST">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label>Enter Year (YYYY)</label>
									<!---- THIS IS FORM 2---->
									<input type="text" name="year" class="validate" required>
									
									<select class="browser-default" name="sfor" required>
									<option value="" disabled selected>Search For</option>
									<option value="1">Research Projects</option>
									<option value="2">Publications</option>
									<option value="3">Thesis</option>
									<option value="4">Conferences</option>
								     </select>
									<button type="submit" class="btn">Search</button>
									</form>

									<form class="col s12" name="form_name3" id="form_name3" style="display:none" action="/new" method="POST">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<label>CSE/ECE/ME/DESIGN</label>
									<!---- THIS IS FORM 3---->
									<input type="text" name="branch" class="validate" required>
									
									<select class="browser-default" name="sfor" required>
									<option value="" disabled selected>Search For</option>
									<option value="1">Research Projects</option>
									<option value="2">Publications</option>
									<option value="3">Thesis</option>
									<option value="4">Conferences</option>
								    </select>
									<button type="submit" class="btn">Search</button>
									</form>
									<br>
									<br><br>
									
									
									
									<br>
									<br><br><br><br>
				         </div>
										
				
				</div>
											
			</div>

		</div> 	
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	
	<script>
	
	$(document).ready(function() {
	
		$('ul.tabs').tabs('select_tab', 'tab_id');
	}
	);
	
	
	$("#myselect").on("change", function() {
								$("#" + $(this).val()).show().siblings("#form_name1").hide();
								$("#" + $(this).val()).show().siblings("#form_name2").hide();
								$("#" + $(this).val()).show().siblings("#form_name3").hide();
									});
									
	var $form = $( this ),
          url = $form.attr( 'action' );
		  
	$.post("new1.php", $("#form-shower").serialize());

									
	
	</script>
</body>

</html>