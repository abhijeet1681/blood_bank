<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="MUMBAI" label="&raquo; MAIN MUMBAI"></optgroup><option value="Bhandup" >BHANDUP</option><option value="thane" >THANE</option><option value="palghar" >PALGHAR</option><option value="bhiwandi" >BHIWANDI</option><option value="kalyan" >KALYAN</option><option value="Nerul" >NERUL</option><option value="kurla" >KURLA</option><option value="DADAR" >DADAR</option><option value="CSMT" >CSMT</option><option value="KALWA" >KALWA</option><option value="MUMBRA" >MUMBRA</option><option value="DIVA" >DIVA</option><option value="KOPAR" >KOPAR</option><option value="THAKURLI" >THAKURLI</option><option value="DOMBIVALI" >DOMBIVALI</option><option value="KANJURMARG" >KANJURMARG</option><option value="VIKROLI" >VIKROLI</option><option value="POWAI" >POWAI</option><option value="GHATKOPAR" >GHATKOPAR</option><option value="VIDHYAVIHAR" >VIDHYAVIHAR</option><option value="SION" >SION</option><option value="PAREL" >PAREL</option><option value="CHINCPOKLI" >CHINCHPOKLI</option><option value="MASJID" >MASJID</option><option value="BYCULLA">BYCULLA</option><option value="SANDHUST ROAD" >SANDHUST ROAD</option><option value="CHURCHGATE" >CHURCHGATE</option><option value="MUMBAI CENTRAL" >MUMBAI CENTRAL</option><option value="MATUNGA" >MATUNGA</option><option value="PANVEL" >PANVEL</option><option value="GHANSOLI" >GHANSOLI</option><option value="AMBERNATH" >AMBERNATH</option><option value="BADLAPUR" >BADLAPUR</option><option value="KARJAT">KARJAT</option><option value="TITWALA" >TITWALA</option><option value="BANDRA" >BANDARA</option><option value="GOREGAO" >GOREGAO</option><option value="MALAD" >MALAD</option><option value="BHAYANDAR" >BHAYANDAR</option><option value="CHEMBUR" >CHEMBUR</option><option value="ASANGAO" >ASANGAO</option><option value="ULASNAGAR" >ULASNAGAR</option><option value="MULUND" >MULUND</option><option value="NAHUR" >NAHUR</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						The process of managing the blood bag that is received from the blood donation events needs a proper and systematic
management. The blood bag must be handled with care and treated thoroughly as it is related to someone’s life. The development
of Web-based Blood Bank Management System (BBMS) is proposed to provide a management functional to the blood bank in
order to handle the blood bag.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								The main objective of the Blood Bank Management System is to manage the details of Blood ,Donor,Blood Group,Blood Bank,Stock. It manages all the information about Blood , Blood Cell, Stock, Blood . The project is totally built at administrative end and thus only the administrator is guaranteed the access.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To wipe off the scarcity of blood and ensure availability of safe and quality blood and other blood components, round the clock and throughout the year. This will lead to alleviation of human sufferings, even to the far-flung remote areas in the country and in world also and for abhijeet and harsh only.    
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Blood banks play an important role in the process of collecting blood and managing blood stocks, approving blood requests, updating donations and updating available blood types. Raster’s web-based BBMS will address the issues and problems encountered in collecting information about donor.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>