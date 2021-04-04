		<?php 
		include('validation.php');
		?>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<p><span class="error">* required field</span></p>
		<form action="" method="post">
		<dl>
			<dt>Name</dt>
			<dd>
				<input type="text" name="name" maxlength="10" placeholder="Enter your name" value="<?= $name ?>">
				<span><?= '*' . $nameErr ?></span>
			</dd>
			
			<dt>Email</dt>
			<dd>
  				<input type="email" name="email" placeholder="name@example.com" value="<?= $email ?>">
  				<span><?= '*' . $emailErr ?></span>
  				
			</dd>

			<dt>Username</dt>
			<dd>
				<input type="text" name="username" placeholder="Enter your username" value="<?= $username ?>">
				<span><?= '*' . $usernameErr ?></span>
				
			</dd>

			<dt>Password</dt>
			<dd>
				<input type="password" name="pass" placeholder="Enter your password" value="<?= $pass ?>">
				<span><?= '*' . $passErr ?></span>
				
			</dd>

			<dt> Confirm Password</dt>
			<dd>
				<input type="password" name="cpass" placeholder="Confirm your password" value="<?= $cpass ?>">
				<span><?= '*' . $cpassErr ?></span>
				
			</dd>

			<dt>Date of Birth</dt>
			<dd>
				<input type="date" name="date">
			</dd>

			<dt>Gender</dt>
			<dd>
				<input type="hidden" name="gender">
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
			</dd><br>

			<dt>Marital Status</dt>
			<dd>
			<select name="mstatus">
			  <option value="">Select menu</option>
			  <option value="1">Single</option>
			  <option value="2">Married</option>
			  <option value="3">Divorced</option>
			  <option value="4">Widowed</option>
			</select>
			</dd>

			<dt>Address</dt>
			<dd>
				<input type="text" name="address" placeholder="Enter your address" value="<?= $address ?>">
				<span><?= '*' . $addressErr ?></span>
				
			</dd>

			<dt>City</dt>
			<dd>
				<input type="text" name="city" placeholder="Enter city" value="<?= $city ?>">
				<span><?= '*' . $cityErr ?></span>
				
			</dd>

			<dt>Postal Code</dt>
			<dd>
				<input type="text" name="pcode" placeholder="Enter postal code"  value="<?= $pcode ?>" maxlength="6">
				<span><?= '*' . $pcodeErr ?></span>
				
			</dd>

			<dt>Home Phone</dt>
			<dd>
				<input type="text" name="hphone" placeholder="Enter home phone" value="<?= $hphone ?>" maxlength="10">
				<span><?= '*' . $hphoneErr ?></span>
				
			</dd>

			<dt>Mobile Phone</dt>
			<dd>
				<input type="text" name="mphone" placeholder="Enter mobile phone" value="<?= $mphone ?>" maxlength="10">
				<span><?= '*' . $mphoneErr ?></span>
				
			</dd>

			<dt>Credit Card Number</dt>
			<dd>
				<input type="text" name="creditCard" placeholder="Enter credit card number" value="<?= $creditCard ?>" maxlength="19">
				<span><?= '*' . $creditCardErr ?></span>
				
			</dd>

			<dt>Credit Card Expiry Date</dt>
			<dd>
				<input type="date" name="cardDate" value="<?= $cardDate ?>">
				<span><?= '*' . $cardExpiryErr ?></span>
			
			</dd>

			<dt>Monthly Salary</dt>
			<dd>
				<input type="text" name="salary" placeholder="Enter your salary" value="<?= $salary ?>">
				<span><?= '*' . $msalaryErr ?></span>
			</dd>

			<dt>Website URL</dt>
			<dd>
				<input type="url" name="url" placeholder="Enter URl address" value="<?= $website ?>">
				<span><?= '*' . $websiteErr ?></span>
			
			</dd>

			<dt>Overall GPA</dt>
			<dd>
				<input type="text" name="gpa" placeholder="Enter your GPA" value="<?= $gpa ?>">
				<span><?= '*' . $gpaErr ?></span>
			
			</dd>
		</dl>
		
		<div>
			<input type="submit" value="Register" name="submit">
		</div>
	</form>
	</body>
</html>