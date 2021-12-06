<?php 
include('config.php');

$conn=mysqli_connect("localhost","root","","realbook");
$sql="sELECT tieude, SUBSTRING(noidung,1,350), hinh, id, date from contentlist where tag = 'cafe sach' 
";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
  while($row=mysqli_fetch_assoc($result)){
    echo '
      <div class="it1">
        <img src=" '.$row["hinh"].' " alt="">
        <div class="it2">
          <div class="it3">
            <span> 
               <img src="https://i.imgur.com/42mPhdJ.png" alt="">
              '.$row["date"].'
            </span>
            <span>
              <img src="https://i.imgur.com/RmK2GqN.png" alt="">
               tranthianhnhi
            </span>
          <br>
          </div>
          <div class="title">'.$row["tieude"].'</div>
          <div class="noidung">'.$row["SUBSTRING(noidung,1,350)"].' </div>
          <a href="content.php? id='.$row["id"].'">
          <button type="button">Đọc Tiếp</button>
          </a>
        </div>
      </div>
    ';
  }
  return $row;
  }
  else {
    echo "0";
  }
  mysqli_close($conn);