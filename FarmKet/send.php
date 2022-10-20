<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php  

if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['cpass']) && isset($_POST['phone'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['pass']);
	$cpass = validate($_POST['cpass']);
	$phone = validate($_POST['phone']);

	if (empty($email) || empty($pass) || empty($cpass) || empty($phone)) {
		echo "no";
	}else {

		$sql = "INSERT INTO `signup` (`Email`, `Password`, `CPassword`, `Contact`) VALUES ('$email', '$pass', '$cpass', '$phone')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo '
			<script type="text/javascript">

			$(document).ready(function(){

				Swal.fire({
				type: "success",
				title: "Loggis In",
				showConfirmButton: false,
				timer: 1500
			})
			});

			</script>
			';
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	echo "yes";
}

?>	
