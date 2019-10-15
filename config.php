<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "hasilpanen");

$db = mysqli_connect("localhost", "root", "", "hasilpanen");

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


function signup($data){
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
    $email = ($data["email"]);
    $name = ($data["name"]);

	// cek username sudah ada atau blm
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){
        
        header("Location: signupWrong1.php");
        return false;
       
        
    }
    

	$password = password_hash($password, PASSWORD_DEFAULT);


	mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$name','$email','$password')");
	return mysqli_affected_rows($conn);

}
 ?>

