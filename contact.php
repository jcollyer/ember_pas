<?php
$pageTitle = "Contact";
  include "header.php"; 
  include "mainNav.php"; 
?>
	<section>
		<div class="blackBox">
			<h5 class="whiteText">Contact us</h5>
			<p class="whiteText">thank you for your interest in Plant a Seed! please feel free to contact us at your convenience. </p>
		</div>
		<div class="section_body">
			<div class="mission">
				<h5>email me:</h5>
				<p><a href="mailto:planta_seed@yahoo.com">planta_seed@yahoo.com</a></p>
				<div class="missionBottomBorder"></div>
			</div>
			<div class="mission">
				<h5>mail me:</h5>
				<p>Plant A Seed</p>
				<p>P.O Box 90102</p>
				<p>Los Angeles, CA 90009</p>
				<iframe class="map" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=436+West+Imperial+Ave.,+Ste.+7++El+Segundo,+CA++90245-2164&amp;aq=&amp;sll=34.031038,-118.201904&amp;sspn=0.440442,0.797195&amp;ie=UTF8&amp;hq=&amp;hnear=436+W+Imperial+Ave+%237,+El+Segundo,+California+90245&amp;ll=33.930518,-118.420618&amp;spn=0.220482,0.398598&amp;t=m&amp;z=12&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=436+West+Imperial+Ave.,+Ste.+7++El+Segundo,+CA++90245-2164&amp;aq=&amp;sll=34.031038,-118.201904&amp;sspn=0.440442,0.797195&amp;ie=UTF8&amp;hq=&amp;hnear=436+W+Imperial+Ave+%237,+El+Segundo,+California+90245&amp;ll=33.930518,-118.420618&amp;spn=0.220482,0.398598&amp;t=m&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				<div class="missionBottomBorder"></div>
			</div>
			<div class="mission">
				<h5>send me a quick message</h5>
				<table id="contactFormTable">
					<form name="contact"  method="POST" action="sendmail.php">
						<tr>
							<td>Name </td>
							<td><input type="text" name="name" class="textfeild" autofocus ></td>
						</tr>	
						<tr>
							<td>Phone </td>
							<td><input type="number" name="number" class="textfeild"  autofocus></td>
						</tr>
						<tr>
							<td>Email </td>
							<td><input type="email" name="email" class="textfeild"  autofocus></td>
						</tr>
						<tr>
							<td>Comments </td>
							<td><textarea class="textarea" name="comments" cols="45" rows="10" autofocus>Enter Text here...</textarea></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><button class="backButton" value="Send Me">Send</button></td>
						</tr>
					</form>
				</table>
				
				<div class="missionBottomBorder"></div>			
			</div>
	</section>
<?php include "footer.php"?>
