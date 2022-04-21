<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fashion_mylishop";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else {echo "Thành công rồi!";}

// test
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "fashion_mylishop";
// $conn =mysqli_connect($servername, $username, $password, $database);
// if ($conn) {
//     mysqli_query($conn,"SET NAME 'utf8'");
// }
// else{
//     echo "Bạn kết nối thất bại!".mysqli_connect_error();
// }
    
?>