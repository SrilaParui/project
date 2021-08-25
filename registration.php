<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>REGISTRATION PAGE </title>
<link rel ="stylesheet" type="text/css" href="asset\css\reg_style.css">
</head>

<body>
	<div class= "navigation_bar">
		<div class= "logo">
			<img src="asset\picture\cu_logo.png" width="100" height="100" alt="logo" title="logo">
		</div>
		<div class= "navi_main">
			
			<a href="index.php"> HOME</a>
			
		
		</div>
	</div>
	
		<h1 style="text-align:center" >REGISTER HERE</h1>
		<div class="reg-box">
	<form action="reg.php" method="post">
	
				<label for="USER ID"><b>USER ID</b></label>
				<input type="text" placeholder="USER ID" name="email" required>
				<br>
				<label for="password"><b>PASSWORD</b></label>
				<input type="password" placeholder="ENTER PASSWORD" name="password" required>
				 
				
				 <br>
				 <label for=" FIRST NAME"><b> FIRST NAME</b></label>
				 <input type="text" placeholder=" FIRST NAME" name="f_name"required>
				 <br>
				 <label for=" LAST NAME"><b> LAST NAME</b></label>
				 <input type="text" placeholder=" LAST NAME" name="l_name"required>
				 <br>
				 <label for="ADDRESS"><b>ADDRESS</b></label>
				 <input type="text" placeholder=" ADDREESS " name="add"required>
				 
				<br>
				Select Your Gender
	  
				<label>
					<input type="radio" name="r1" value="male" id="RadioGroup1_0">
					Male</label>
				  
				  <label>
					<input type="radio" name="r2" value="female" id="RadioGroup1_1">
					Female</label>
				  <br>
				  <label for="ENTER DOB"><b>ENTER DOB</b></label>
						<input type="date" placeholder="ENTER DOB" name="dob" required>
		
				  
		
				 Select your INSTITUTE
				
				<select name="inst">
				<option value="RAJABAZAR SCIENCE COLLEGE"> RAJABAZAR SCIENCE COLLEGE</option>
				<option value="COLLEGE STREET CAMPUS">COLLEGE STREET CAMPUS</option>
				<option value="TECHNPLOGY CAMPUS">TECHNPLOGY CAMPUS</option>
				</select>
				<br><br>
				Select your DEPARTMENT
				
				<select name="dept">
				<option value="CSE">CSE</option>
					<option value="IT">IT</option>
					<option value="ECE">ECE</option>
					<option value="PSC">PSC</option>
				</select>
				<br><br>
				
						<button style="background-color:red" type="submit">SUBMIT</button>
						<P> IF YOU WANT TO UPDATE PROFILE PLEASE PRESS THE BELOW BUTTON</P>
						<a style="font-weight:bold" href="update_profile.php">UPDATE PROFILE</a>
	
		   </form>
		   
        
		</div>
</body>
</html>
