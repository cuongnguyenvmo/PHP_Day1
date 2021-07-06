<?php 
    $conn = mysqli_connect("localhost","admin","1","login");
    mysqli_set_charset($conn,"utf8");
    if (!$conn){
        die ("Ko thể kết nối CSDL" . mysqli_connect_error());
    }else{
        echo "Kết nối thành công";
    }
?>