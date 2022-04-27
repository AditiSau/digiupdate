<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"><style type="text/css">
	 *
  {
    box-sizing: border-box;
  }
  body
	{
		/**/background-image:linear-gradient( rgba(0,0,0,0.6), rgba(255, 255, 255, 0.6)), 
				url('22.jpg');
				background-repeat: no-repeat;
				background-size: cover;
				background-position: 100% 100%;
				background-attachment: fixed;
				width: 100%;
				height: 100%;
		
	}
	:root{

				--bg-color: linear-gradient(to right,#26B8E3, #DB1BFA) ;
				--bg-hover: linear-gradient(to right,#DB1BFA,#26B8E3);



			}
button{

				  background-image: var(--bg-color) ;
			}

			button:hover{

				  background-image: var(--bg-hover) ;
				

			}

			form{

				border-radius: 10px;
				margin:  15% 0%;
			}

			
label{

				font-weight: 600;
				
			}
</style></head>
<body>

<div class="container">
			<div class="row">
				<div class="col-11 col-md-3 col-lg-3"></div>
				<div class="col-11 col-md-6 col-lg-6">
					
					<form method="post" action="reg.php"class="bg-light px-5 pb-4 " >

						<h1 class="text-center py-4 text-dark">Register your name</h1>
						<div class="mb-3">
							
							<input type="text" class="form-control"  placeholder="UserName" name="user">
							
						</div>
						<div class="mb-3">
							
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
						</div>
						<div class="mb-3">
							
							<input type="email" class="form-control" id="" placeholder="email" name="email">
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg w-100" name="login" id="myBtn">Continue</button><!-- 
<br><br>
				<a type="submit" href="transaction.php"class="btn btn-primary btn-lg w-100" name="login" id="myBtn">Pay 349/-INR and Complete</a> -->
						 <div class="my-4 ">

							<span class="float-left h5">Already have an account?</span> <h5 class=""><a href="login.php">&nbsp Login here...</a></h5>

						</div>
 
						
					</form>
				</div>


				<div class="col-11 col-md-3 col-lg-3"></div>
			</div>
		</div>

</body></html>