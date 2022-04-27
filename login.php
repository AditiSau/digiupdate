	
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style type="text/css">
	 *
  	{
    	box-sizing: border-box;
  	}

  body
	{
		/**/background-image:linear-gradient( rgba(0,0,0,0.6), rgba(255, 255, 255, 0.6)), 
				url('files/logo2.jpg');
				background-repeat: no-repeat;
				background-size: cover;
				background-position: 100% 100%;
				background-attachment: fixed;
				width: 100%;
				height: 100%;
		
	}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
	:root
	{

			--bg-color: linear-gradient(to right,#26B8E3, #DB1BFA) ;
			--bg-hover: linear-gradient(to right,#DB1BFA,#26B8E3);



	}
button
	{

			background-image: var(--bg-color) ;
	}

button:hover
	{

			background-image: var(--bg-hover) ;
				

	}

			form{

				border-radius: 10px;
				margin: 13% 0%;
	}
			

			
label{

				font-weight: 600;
				
			}
	/*label
	{
		text-align: left;
	}*/
	

</style>
</head>
<body>


			<div class="container">
			<div class="row">
				<div class="col-11 col-md-3 col-lg-3"></div>
				<div class="col-11 col-md-6 col-lg-6">
					
					<form method="post" class="bg-light px-5 pb-4 " action="validate.php">

						<h1 class="text-center py-4 text-dark">Login Form</h1>
						<div class="mb-3">
							
							<input type="text" class="form-control"  placeholder="UserName" name="user">
							
						</div>
						<div class="mb-3">
							
							<input type="password" class="form-control"  placeholder="Password" name="password">
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg w-100" name="sub" id ="myBtn">Login</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Please Wait..</p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

				
						 <div class="my-4 ">

							<span class="float-left h5">Not a member?&nbsp</span>  <h5 class=""><a href="signup.php"> Sign up Now</a></h5>

						</div>
 
						
					</form>
				</div>


				<div class="col-11 col-md-3 col-lg-3"></div>
			</div>
		</div>


</body></html>