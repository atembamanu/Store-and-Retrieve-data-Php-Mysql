<?php include 'server.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container padding">
        <form id="contact-form" method="post" action="index.php" role="form">

            <div class="messages"></div>

            <div class="controls">

                <div class="row padding">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="lead text-dang" style="margin: 12px; color:#73AD21;font:bolder;">
                                Please fill the form below.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row padding">
                    <div class="col-md-6 ">
                        <div class="form-group">
                            <label for="form_name">Firstname</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname"
				
                                required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname</label>
                            <input id="form_lastname" type="text" name="secondname" class="form-control" 
					
				placeholder="Please enter your lastname"
                                required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row padding">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_email">Email</label>
                            <input id="form_email" type="email" name="email" class="form-control" 
			placeholder="Please enter your email"
                                required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                </div>
                <div class="row padding">
                    <div class="col-md-12">

                        <form>
                            <p>Gender</p>
                            <input type="radio" name="gender" value="Male">Male
                            <input type="radio" name="gender" value="Female">Female
			    <input type="radio" name="gender" value="Prefer not to say">Prefer not to say
                        </form>
                    </div>
                </div>
                <br>
                <div class="row padding">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label for="form_name">Enter course code & course description </label>
                            <input id="form_name" type="text" name="course" class="form-control"
				placeholder="Please enter your course code"
                                required="required" data-error="Course code is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row padding">
                    <div class="col-md-12" >
                        <div class="form-group">
                            <input id="textbox" type="text" name="description" class="form-control" placeholder="Please enter the Description"
                                required="required" data-error="Description is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <div class="row padding">
                    <div class="col-md-6">
                        <input type="submit" class="btn  btn-danger btn-send" onclick="myFunction()" value="Clear Info">
                    </div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success btn-send" id="send" value="Send Info" name="submit">
                    </div>
                </div>
            </div>
            <hr class="my-4">
             <div class="containers padding text-center">
                            <div class="col-md-12">
                                  <a href="fetch.php" class="btn btn-info btn-send">View Data</a>
                    
                    </div>
                </div>
        

        </form>
    </div>
   
    </div>
<script>
function myFunction() {
  document.getElementById("contact-form").reset();
}
</script>

</body>

</html>
