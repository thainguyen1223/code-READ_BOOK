<?php 
include('config.php');

$conn=mysqli_connect("localhost","root","","realbook");
$sql="sELECT tieude, SUBSTRING(noidung,1,450), hinh, id, date from contentlist where tag = 'tin sach' 
";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
  while($row=mysqli_fetch_assoc($result)){
    echo '
        <div class="it1">
          <a href="content.php? id='.$row["id"].'">         
            <img src=" '.$row["hinh"].'" alt="">
            <div class="title">
              '.$row["tieude"].'
            </div>
            <div class="noidung">
              '.$row["SUBSTRING(noidung,1,450)"].'
            </div>
          </a>
          <span> 
            <img src="https://i.imgur.com/42mPhdJ.png" alt="">
            '.$row["date"].'
          </span>
          <span>
            <img src="https://i.imgur.com/RmK2GqN.png" alt="">
            tranthianhnhi
          </span>
        </div>
    ';
  }
  return $row;
  }
  else {
    echo "0";
  }
  mysqli_close($conn);