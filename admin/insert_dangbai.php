<?php
include("connec.php");
   $title = mysqli_real_escape_string($conn, $_REQUEST['title']);
   $noidung = mysqli_real_escape_string($conn, $_REQUEST['noidung']);
   $hinh = mysqli_real_escape_string($conn, $_REQUEST['hinh']);
   $nguon = mysqli_real_escape_string($conn, $_REQUEST['nguon']);
	$tag = mysqli_real_escape_string($conn, $_REQUEST['tag']);

   $sql = "INSERT INTO contentlist (tieude, noidung, hinh,tag,nguon) VALUES ('$title', '$noidung', '$hinh','$tag','$nguon')";

    if(mysqli_query($conn, $sql)){

        echo "Nhap thanh cong !.";

    } else{

        echo "Khong the thuc thi cau lenh $sql. " . mysqli_error($conn);

    }
    mysqli_close($conn);
?>
