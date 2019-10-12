<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "hasilpanen");


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
    
    	

        


	

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$name','$email','$password')");
	return mysqli_affected_rows($conn);

}
 ?>
