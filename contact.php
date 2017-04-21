
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="Images/ic.png">
    <link rel="stylesheet" href="CSS/carousel.css">
    <link rel="stylesheet" href="CSS/bug.css">
    <link rel="stylesheet" href="CSS/full-width-pics.css">
  	<link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/bootstrap-theme.css">
    <link rel="stylesheet" href="CSS/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="JS/bootstrap.js"></script>
    <script src="JS/npm.js"></script>
      <style>
  h1,h2,p,label{color:white;}
  </style>
  </head>
<!-- NAVBAR 
================================================== -->
  <body style="background-color:#2B2B2B">
     <div class="navbar-wrapper">
      <div class="container">

        <nav class="nav navbar-static-top" data-spy="affix" data-offset-top="420">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed navbar-inverse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><header>GamOn</header></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="psgames.php">PS</a></li>
                    <li><a href="xboxgames.php">Xbox</a></li>
                    <li><a href="pcgames.php">PC</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Catagory</li>
                    <li><a href="action.php">Action</a></li>
                    <li><a href="strategy.php">Streatgy</a></li>
                    <li><a href="other.php">Other</a>
                 	</li>
               	  </ul>
                 </li>
                 <li class="active navbar-inverse"><a href="contact.php">Contact</a></li>
              </ul>
    				<ul class="nav navbar-nav navbar-right">
    					<li><a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter" style="color:blue"></span></a></li>
        				<li><a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook" style="color:darkblue"></span></a></li>
                        <li><a class="btn btn-social-icon btn-pinterest"><span class="fa fa-pinterest-p" style="color:#BC3131"></span></a></li>
                        <li><a class="btn btn-social-icon btn-yahoo"><span class="fa fa-yahoo" style="color:#7317A2"></span></a></li>
                        <li><a class="btn btn-social-icon btn-google"><span class="fa fa-google" style="color:#C00003"></span></a></li>
                        <li><a class="btn btn-social-icon btn-dropbox"><span class="fa fa-dropbox" style="color:blue"></span></a></li>
                    </ul>
    			</div>
    		</div>
		</nav> 
      </div>
    </div>
    
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-circle img-center" height="400" width="400" src="Images/ic.png" alt="">
    </header>

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="list-group-item-heading">
                <header>
                    <h1 class="section-heading">Contact</h1>
                    </header>
                </div>
                <div class="col-lg-7">
                      <form class="form-horizontal" method="post" action="contact.php">
                      
                      
                      
                <!--PHP start-->
                
<p><?php $db=new MySQLi("localhost","root","","gamon");
			if(mysqli_connect_errno())
			{
				echo "error".mysqli_connect_errno();
			} ?></p>
        <p> <?php
		
		
		
		if(isset($_POST['save'])){	
		$querry2="select max(no) from msg";
		$result_show=mysqli_query($db,$querry2);
		$row=mysqli_fetch_assoc($result_show);
		$last_id = mysqli_insert_id($db);
		$no= (rand(10,100));
        $cname=$_POST["cname"];
		$mail=$_POST["mail"];
		$ph=$_POST["ph"];
		$country=$_POST["country"];
		$gender=$_POST["gender"];
		$message=$_POST["message"];
		$querry="insert into msg(no,cname,mail,ph,country,gender,message) values ('".$no."','".$cname."','".$mail."','".$ph."','".$country."','".$gender."','".$message."')";
		$result=mysqli_query($db,$querry);
		if($result==true){		
		echo "Message Sent!";		
		}
		else {
		echo " Error ".mysqli_error($db);
		
		}
		}
				?></p>
                
                
                <!--PHP Ends-->
                
                
                          <div class="form-group">
                          <label class="control-label" for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="cname" placeholder="Enter Name">
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="email">Email:</label>
                           	<input type="email" class="form-control" id="email" name="mail" placeholder="Enter Email">
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="ph" placeholder="Enter Phone no."> 
                          </div>
                          <div class="form-group">
                          	<label>Gender:</label><br>
                          	<label >
                              <input class="active" type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"><span class="fa fa-male"> Male</span>
                              <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"><span class="fa fa-female">Female</span>
                            </label>
                          </div>
                           <div class="form-group">
                            <label for="Select" class=" control-label"></label>
                              <select id="Select" name="country" class="form-control">
                                <option>select Country</option>
                                <option>Pakistan</option>
                                <option>Canada</option>
                                <option>Afghanistan</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-default button" name="save">Submit</button> 
                          </div>
                      </form>
                 </div>
                 <div class="col-lg-5">
                     <div class="panel-primary">
                     	<h1 class="panel-heading">Address:</h1>
                        <p class="panel-body">112-Barkat Market, Lahore<br><br><br><br></p>
                     </div>
                     <div id="googleMap" style="height:400px;width:100%;"></div>
						<script>
                        function myMap() {
                        var myCenter = new google.maps.LatLng(41.878114, -87.629798);
                        var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
                        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        var marker = new google.maps.Marker({position:myCenter});
                        marker.setMap(map);
                        }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWhYpoAmoSFY60OtNIQrxMtPJRacHXS4k&callback=myMap"></script>
                 </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="container">
    
    <hr>
      <!-- FOOTER -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                <div class="container">
					<div class="col-lg-2">
                    	<div class="panel-primary">
                    		<img src="Images/ic.png" height="140" width="140" alt="icon">
							<h1><i>GamOn</i> </h1>
                      	</div>
	   				</div>
                    <div class="col-lg-2">
                    	<div class="panel-primary">
                        	<h1>Menue</h1>
                        	<ul class="nav">
                            	<li><a href="index.php"> Index</a></li>
                            	<li><a href="about.php"> About</a></li>
                            	<li><a href="pcgames.php"> Games</a></li>
                            	<li><a href="contact.php"> Contact</a></li>
                        	</ul>
                     	</div>
                   	</div>
                  	<div class="col-lg-4">
                   		<div class="panel-primary">
                      		<h1 >Address</h1>
                            <p class="panel-body"><i class="fa fa-map-marker"></i> 112-Barkat Market, Lahore<br></p>
                            <p class="panel-body"><i class="fa fa-phone"></i> +923236561592<br></p>
                            <p class="panel-body"><i class="fa fa-envelope"></i> ehtashamposwal@rocketmail.com<br></p>
                       </div>
                	</div>
                    <div class="col-lg-4">
                    	<div class="panel-primary">
                        	<h1 >Follow</h1>
                        	<div>
                       			<ul class="nav navbar-nav">
                                	<li><a class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter" style="color:blue"></span></a></li>
                                	<li><a class="btn btn-social-icon btn-facebook"><span class="fa fa-facebook" style="color:darkblue"></span></a></li>
                                	<li><a class="btn btn-social-icon btn-pinterest"><span class="fa fa-pinterest-p" style="color:#BC3131"></span></a></li>
                                	<li><a class="btn btn-social-icon btn-yahoo"><span class="fa fa-yahoo" style="color:#7317A2"></span></a></li>
                                	<li><a class="btn btn-social-icon btn-google"><span class="fa fa-google" style="color:#C00003"></span></a></li>
                                    <li><a class="btn btn-social-icon btn-google"><span class="fa fa-flickr" style="color:pink"></span></a></li>
                                    <li><a class="btn btn-social-icon btn-google"><span class="fa fa-instagram" style="color:#015EAB"></span></a></li>
                                    <li><a class="btn btn-social-icon btn-google"><span class="fa fa-openid" style="color:#DDB303"></span></a></li>
                           		</ul>
                       		</div>
                   		</div>
				  	</div>
					<br/>
					<br/>
				</div>	
           		<p class="pull-right"><a href="#">Back to top</a></p>	
			</div>
        </div>
		<hr>
       	<div class="col-lg-12">
        	<p align="center">&copy; 2017 <a href="index.php">GamOn</a>, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
       	</div>	
  	</footer>
</div>
    
    <script src="JS/jqurey.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/js3.js"></script>
    <script src="JS/js2.js"></script>


  </body>
</html>
