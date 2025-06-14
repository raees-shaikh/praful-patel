<?php

						

require "./assets/php/config.php";

$date = date('h:i:sa d-m-y');





function input($data) {

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

}



$name        = input($_POST['name']);

$email       = input($_POST['email']);

$num         = input($_POST['number']);

$zip         = input($_POST['zip']);

$captcha_res = input($_POST['g-recaptcha-response']);



$error =[];



$captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . SITE_SECRET . '&response=' . $captcha_res);

$captcha = json_decode($captcha);



if (empty($name) && empty($email) && empty($num) && empty($zip) && empty($captcha_res) ) {

    // $error['all'] = "Please fill all the fields";

    print_r(json_encode(["status"=>"failed","msg"=>"Please fill all the fields"]));

    exit;

}

if (empty($captcha_res) || !$captcha->success) {

    $error['captcha'] = "Captcha is invalid";

}

if (!is_numeric($num)) {

    $error['number'] = "Phone number must be a number";

}

if (!is_numeric($zip)) {

    $error['zip'] = "Zipcode must be a number";

}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

    $error['email'] = "Please enter valid email";

}

if (!empty($error)) {

    print_r(json_encode(["errors"=>$error]));

    exit;

}



$sql    = "INSERT INTO user (name,email,num,zip,date) VALUES ('$name','$email','$num','$zip','$date')";



$toEmail = TO_EMAIL;  



$emailSubject = 'Join Request Submitted By ' . $name;

$htmlContent = '<h2>Join Request From</h2>
				<table>
				    <tr>
				        <td>Name: </td>
				        <td>'.ucfirst($name).'</td>
				    </tr>
				    <tr>
				        <td>Phone: </td>
				        <td>
	                        <a href="#">'.$num.'</a>
	                    </td>
				    </tr>
				    <tr>
				        <td>Email: </td>
				        <td>'.$email.'</td>
				    </tr>
				    <tr>
				        <td>Message: </td>
				        <td>'.$zip.'</td>
				    </tr>
				</table>'; 


// // Set content-type header for sending HTML email

// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



// // Additional headers

// $headers .= 'From: ' . $email . '\r\n';
// $headers .= 'X-Mailer: PHP/' . phpversion();

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $email . "\r\n";
$headers .= 'Reply-To: ' .$email . "\r\n";
$headers .= 'X-Mailer: ' . $name;
                

$query  = mysqli_query($db, $sql);

$mail   = mail($toEmail, $emailSubject, $htmlContent, $headers);



if ($mail && $query) {

    print_r(json_encode(["status"=>"success","msg"=>"Thank you"]));

}else{

    print_r(json_encode(["status"=>"failed","msg"=>"Error occured!"]));

}

    //     }

    //     if (@$query && mail($toEmail, $emailSubject, $htmlContent, $headers)) {

    //         $s = true;

    //         // 	echo '<span style="color:green;">Thank you</span>';

    //     }

    // }





    // function old($key, $default = null) 

    // {

    //     $s = $GLOBALS['s'];

    //     echo (!$s ? (isset($_POST[$key]) ? $_POST[$key] : null ) : null );

    // }







    



    // $conn = mysqli_connect($servername, $username, $password, $dbname);



    // if (!$conn) {

    //     die("Connection failed.");

    // }

    // $today = date("Y-M-D");

    // $sql = "SELECT * FROM events where status=1 and flag=0 and startDate > ADDDATE(NOW(), INTERVAL -1 MONTH) order by startDate desc LIMIT 3";



    // $result = $conn->query($sql);







    //     while ($result->num_rows > 0 && $row = $result->fetch_assoc()) {



?>