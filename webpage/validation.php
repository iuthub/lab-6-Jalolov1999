<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
<?php
$nameErr = $emailErr = $usernameErr = $passErr = $cpassErr = $dobErr = $genderErr = $mstatusErr = $addressErr = $cityErr = $pcodeErr = $hphoneErr = $mphoneErr = $creditCardErr = $cardExpiryErr = $msalaryErr = $websiteErr = $gpaErr = "";

$name = $email = $username = $pass = $cpass =$pcode = $hphone = $mphone = $creditCard =  $cardDate = $salary = $website = $gpa = $address = $city = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "This field is required";
	} else {
		$name = $_REQUEST["name"];
		if (!preg_match('/^[a-z]{2,}$/i', $name)) {
			$nameErr = "Invalid name";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "This field is required";
	} else {
		$email = $_REQUEST["email"];
		if (!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/i' , $email)) {
  			$emailErr = "Invalid email format";
		}
}

	if (empty($_POST["username"])) {
		$usernameErr = "This field is required";
	} else {
		$username = $_REQUEST["username"];
		if (!preg_match('/^[a-z]{5,}$/i', $username)) {
			$usernameErr = "Invalid username";
		}
}

	if (empty($_POST["pass"])) {
		$passErr = "This field is required";
	} else {
		$pass = $_REQUEST["pass"];
		if (!preg_match('/\A(?=\w{6,10}\z)(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})\D*\d.*\z/i', $pass)) {
			$passErr = "Invalid password";
		}
}

	if (empty($_POST["cpass"])) {
		$cpassErr = "This field is required";
	} else {
		$cpass = $_REQUEST["cpass"];
		if (!preg_match('/\A(?=\w{6,10}\z)(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})\D*\d.*\z/i', $cpass)) {
			$cpassErr = "This should be similar as password";
		}
}

	if (empty($_POST["address"])) {
		$addressErr = "This field is required";
	} else {
		$address = $_REQUEST["address"];
}

	if (empty($_POST["city"])) {
		$cityErr = "This field is required";
	} else {
		$city = $_REQUEST["city"];
}

	if (empty($_POST["pcode"])) {
		$pcodeErr = "This field is required";
	} else {
		$pcode = $_REQUEST["pcode"];
		if (!preg_match('/^\d{6}$/i', $pcode)) {
			$pcodeErr = "Invalid postal code";
		}
}

	if (empty($_POST["hphone"])) {
		$hphoneErr = "This field is required";
	} else {
		$hphone = $_REQUEST["hphone"];
		if (!preg_match('/^\d{2}\s\d{7}$/i', $hphone)) {
			$hphoneErr = "Invalid home phone";
		}
}

	if (empty($_POST["mphone"])) {
		$mphoneErr = "This field is required";
	} else {
		$mphone = $_REQUEST["mphone"];
		if (!preg_match('/^\d{2}\s\d{7}$/i', $mphone)) {
			$mphoneErr = "Invalid mobile phone";
		}
}

	if (empty($_POST["creditCard"])) {
		$creditCardErr = "This field is required";
	} else {
		$creditCard = $_REQUEST["creditCard"];
		if (!preg_match('/^\d{4}\s\d{4}\s\d{4}\s\d{4}$/i', $creditCard)) {
			$creditCardErr = "Invalid credit card number";
		}
}

	if (empty($_POST["cardDate"])) {
		$cardExpiryErr = "This field is required";
	} else {
		$cardDate = $_REQUEST["cardDate"];
}

	if (empty($_POST["salary"])) {
		$msalaryErr = "This field is required";
	} else {
		$salary = $_REQUEST["salary"];
}

	if (empty($_POST["url"])) {
		$websiteErr = "This field is required";
	} else {
		$website = $_REQUEST["url"];
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
 			 $websiteErr = "Invalid URL";
}
}
	if (empty($_POST["gpa"])) {
		$gpaErr = "This field is required";
	} else {
		$gpa = $_REQUEST["gpa"];
		if (!preg_match('/^[0-4][\.][0-5][0-9]*/i', $gpa)) {
			$gpaErr = "Invalid gpa number";
		}
}
}

?>