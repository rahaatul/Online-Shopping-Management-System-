<!DOCTYPE html>
<html>
<head>
	<title>Donation Panel</title>
</head>
<body>

	<p><span style="color: red">*</span> - Denotes Required Information</p>
	<p><b>> 1 Donation</b>&emsp;> 2 Confirmation&emsp;> Thank You!</p>
	<p style="color: red; font-size: 30px"> Donor Information</p>

	<table>
		<tr>
			<td style="width: 700px; border: 0px" align="right">

				<form>

				<label for="firstname"> <b> First Name: </b> <span style="color: red">*</span></label>
				<input type="text" id="firstname" name="firstname" required=""> <br><br>

				<label for="lastname"> <b> Last Name: </b> <span style="color: red">*</span></label>
				<input type="text" id="lastname" name="lastname"> <br><br>

				<label for="company"> <b> Company:</b>&emsp;</label>
				<input type="text" id="company" name="company"> <br><br>

				<label for="address1"> <b> Address 1: </b> <span style="color: red">*</span></label>
				<input type="text" id="address1" name="address1"> <br><br>

				<label for="address2"> <b> Address 2:</b>&emsp;</label>
				<input type="text" id="address2" name="address2"> <br><br>

				<label for="city"> <b> City: </b> <span style="color: red">*</span></label>
				<input type="text" id="city" name="city"> <br><br>

				<label for="state"><b>State</b> <span style="color: red">*</span></label>
				<select name="state" id="state" style="width: 170px">
				<option value="select">Select State</option>
				<option value="dhaka">Dhaka</option>
				<option value="chittagong">Chittagong</option>
				<option value="barisal">Barisal</option>
				<option value="mymensingh">Mymensingh</option>
				<option value="rajshahi">Rajshahi</option>
				<option value="rangpur">Rangpur</option>
				<option value="sylhet">Sylhet</option>
				<option value="khulna">Khulna</option>
				</select> <br><br>

				<label for="zipcode"> <b> Zip Code: </b> <span style="color: red">*</span></label>
				<input type="number" id="zipcode" name="zipcode"> <br><br>

				<label for="country"><b>Country</b> <span style="color: red">*</span></label>
				<select name="country" id="country" style="width: 170px">
				<option value="select">Select Country</option>
				<option value="bangladesh">Bangladesh</option>
				<option value="india">India</option>
				<option value="indonesia">Indonesia</option>
				<option value="pakistan">Pakistan</option>
				<option value="japan">Japan</option>
				<option value="turkey">Turkey</option>
				<option value="thailand">Thailand</option>
				<option value="malaysia">Malaysia</option>
				</select> <br><br>

				<label for="phone"> <b> Phone: </b> </label>
				<input type="number" id="phone" name="phone"> <br><br>

				<label for="fax"> <b> Fax: </b> </label>
				<input type="number" id="fax" name="fax"> <br><br>

				<label for="email"> <b> Email: </b> <span style="color: red">*</span></label>
				<input type="email" id="email" name="email"> <br><br>

                <p> (Check a Button or type in your amount)</p>

				<label for="donationamount" style="font-size: 20px"> <b> Donation Amount: </b> <span style="color: red">*</span></label>
				<!--<p>(Check a button or type in your amount)</p>-->

			   	<input type="radio" id="none" name="amount" value="none">
			  	<label for="none">None</label>

			  	<input type="radio" id="50" name="amount" value="50">
			  	<label for="50">$50</label>  

			 	<input type="radio" id="75" name="amount" value="75">
			  	<label for="75">$75</label>
			  	
			  	<input type="radio" id="100" name="amount" value="100">
			  	<label for="100">$100</label>

			  	<input type="radio" id="250" name="amount" value="250">
			  	<label for="250">$250</label>

			  	<input type="radio" id="other" name="amount" value="other">
			  	<label for="other">other</label> <br>

			  	<label for="otheramount"> <b> Other Amount </b> $ </label>
				<input type="number" id="otheramount" name="otheramount"> <br><br>

                <p>(Check if yes)</p>

			  	
                <label for="recurringdonation"> <b> Recurring Donation: </b></label>
				<input type="Checkbox" id="donatecheck" name="donatecheck" value="donate">
				<label for="donatecheck">I am interested in giving on a regular basis.</label> <br>

				<label> Monthly Credit Card $ <input type="number" style="width: 30px"> For <input type="number" style="width: 30px"> Months </label>


				<p style="color: red; font-size: 30px" align="left"> Honorarium and Memorial Donation Information</p>

				<label><b>I would like to make this donation</b></label>
				<input type="radio" id="honor" name="donationinfo" value="honor">
			  	<label for="honor">To Honor&emsp; &ensp;</label> <br>
			  	<input type="radio" id="memory" name="donationinfo" value="memory">
			  	<label for="memory">In Memory of</label> <br><br>

			  	<label for="name"> <b> Name: </b></label>
				<input type="text" id="name" name="name"> <br><br>

				<label for="donateto"> <b> Acknowledge Donation to: </b></label>
				<input type="text" id="donateto" name="donateto"> <br><br>

				<label for="address"> <b> Address: </b></label>
				<input type="text" id="address" name="address"> <br><br>

				<label for="donatecity"> <b> City: </b></label>
				<input type="text" id="donatecity" name="donatecity"> <br><br>

				<label for="donatestate"><b>State</b></label>
				<select name="donatestate" id="donatestate" style="width: 170px">
				<option value="select">Select State</option>
				<option value="dhaka">Dhaka</option>
				<option value="chittagong">Chittagong</option>
				<option value="barisal">Barisal</option>
				<option value="mymensingh">Mymensingh</option>
				<option value="rajshahi">Rajshahi</option>
				<option value="rangpur">Rangpur</option>
				<option value="sylhet">Sylhet</option>
				<option value="khulna">Khulna</option>
				</select> <br><br>

				<label for="donatezip"> <b> Zip: </b></label>
				<input type="number" id="donatezip" name="donatezip"> <br><br>

				<p style="color: red; font-size: 30px" align="left"> Additional Information</p>
				<p align="left">Please enter your name, company or organization as you would like it to appear in our publications:</p><br>

				<label for="nameinfo"> <b> Name: </b></label>
				<input type="text" id="nameinfo" name="nameinfo"> <br> <br>

				<input type="Checkbox" id="infocheck1" name="infocheck" value="check1" align="left">
				<label for="infocheck1" style="text-align: right"> I would like my gift to remain anonmous.</label> <br>

				<input type="Checkbox" id="infocheck2" name="infocheck" value="check2">
				<label for="infocheck2">My employer ofers a matching gift program. I will mail the matching gift form.</label> <br>

				<input type="Checkbox" id="infocheck2" name="infocheck" value="check2">
				<label for="infocheck2">Please save the cost of acknowledgeing this gift by not mailing a thank you letter.</label> <br> <br>

				<label for="comments"> <b> Comments: </b></label>
				<textarea id="comments" name="comments" rows="4" cols="50"></textarea><br>	

				<label for="comments"> <b> How may we contact you? </b></label>

				<input type="Checkbox" id="contactmail" name="contact" value="email">
				<label for="contact">E-mail</label> <br>

				<input type="Checkbox" id="contactpmail" name="contact" value="pemail">
				<label for="contact">Postal Mail</label> <br>

				<input type="Checkbox" id="contactphn" name="contact" value="phn">
				<label for="contact">Telephone</label> <br>

                <input type="Checkbox" id="contactfax" name="contact" value="fax">
				<label for="contact">Fax</label> <br>

				<p style="color: silver">I would like to receive newsletters and information about special events by:</p>

				<input type="Checkbox" id="contact" name="contactmail" value="email">
				<label for="contact">E-mail</label> <br>

				<input type="Checkbox" id="contactpmail" name="contact" value="pemail">
				<label for="contact">Postal Mail</label> <br>

				<input align="left" type="Checkbox" id="lascheck" name="lastcheck" value="lastcheck">
				<label for="lastcheck">I would like information about volunteering with the company.</label> <br><br>

				<button type="button">Reset</button>
				<button type="button">Continue</button>

                <p>Donate online with confidence. You are on a secure server. </p> 
                <p>If you have any  problems or questions, Please contact  </p>
                <p style="color: silver"> support.</p> 
 
				</form>
			</td>
		</tr>
	</table>


</body>
</html>