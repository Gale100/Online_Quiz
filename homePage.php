<!--
		created by Id: 700657837,700678947,700663385

-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="main.css">
		<!--main.js -->
		<script type="text/javascript" src="homePage.js"></script>
	</head>
	<body>
         <!--Navigation bar -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <a class="navbar-brand" href="homePage.php"><img src="image/logo.jpg" style="width: 120px;height: 85px;"> IQcenter</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                       <a class="nav-link" href="homePage.php ">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="inc_enrollmentPage.php">Enroll Course</a>
                    </li>
                   <li class="nav-item">
                      <a class="nav-link" href="articlePage.html">Articles</a>
                   </li>
                   <li class="nav-item">
                      <a class="nav-link" href="aboutUs.html">About Us</a>
                   </li>
      
                 </ul>
             </div>
         </nav>
		<div class="container">
			<!-- Container is the parent class -->
			<div class="row" id="nameJumbo">
				<div class="jumbotron" >
					<h1>Do you want to check your IQ ?</h1><p><img src="image/image2.jpg"  style="width: 300px;height: 300px;float:right;"></p>
					<p class="lead"> You are on the right place. you can check your IQ and share it to your family and friends. Know your your capacity</p>
					
					<p>IQ is the number that a person scores after taking one of the many standardized tests to measure the intelligence level.</p>
					<p>The score of 95% of the population ranges between 150 and 200.</p>
						<div class="container">
							<div class="row">
								<div class="col-lg-8">
									<p><a class="btn btn-lg btn-info" id="searchBtn" href="#" role="button">Check your IQ</a></p><br/><br/><br/>
										<div class="container" id="form1">
										<!--Initially form is hidden. -->
											<div id="myForm"  hidden="true">
												<form action="sessionPage.php" method="POST" >
													<div class="form-group" id="form3">
														<h3>Fill all the columns in the below form.</h3>
														<label>Student ID :</label><input  class="form-control" id="studentID" type="text" name="studentID" value="<?php if(isset($_POST['startquiz']))echo $_POST['studentID']; ?>" required/></br>
														<label>First Name :</label><input  class="form-control" id="fName" type="text" name="firstName" value="<?php if(isset($_POST['startquiz']))echo $_POST['firstName']; ?>" required/></br>
														<label>Last Name :</label><input  class="form-control" id="lName" type="text" name="lastName" value="<?php if(isset($_POST['startquiz']))echo $_POST['lastName']; ?>" required/></br>
														<label>Age:</label><input  class="form-control" id="age" type="text" name="age" value="<?php if(isset($_POST['startquiz']))echo $_POST['age']; ?>" required/></br>
														<label>Email :</label><input  class="form-control" id="eMail" type="text" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" name="email" value="<?php if(isset($_POST['startquiz']))echo $_POST['email']; ?>" required/><span>Email Format Ex:<small><b>axb33850@ucmo.edu</b></small></span></br>
														<input class="btn btn-success" type="submit" id="quizStart" name="startquiz" value="Start the Quiz"/></br>
													</div>
												</form>
											</div>
										</div>
								</div>
							</div>
						</div>

                </div>

            </div>

        </div>
	</div>
  </body>
 </html>
 