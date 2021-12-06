<?php 
include('config.php');
function tin1() {
  $conn=mysqli_connect("localhost","root","","realbook");
  $sql="sELECT tieude, SUBSTRING(noidung,1,350), hinh, date, id from contentlist 
  where DATEDIFF(CURDATE(), date) between 6 and 10
  limit 1
  ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
      while($row=mysqli_fetch_assoc($result)){
      echo '
      
          <div class="g1">
          <a href="content.php?id='.$row["id"].'">
             <img src="'.$row["hinh"].'"class="pic1" alt="">
             <div class="title1">'.$row["tieude"].'</div>
             </a>
          </div>
      ';
    }
    return $row;
    }
    else {
      echo "0";
    }
    mysqli_close($conn);
}
function tin2(){
  $conn=mysqli_connect("localhost","root","","realbook");
  $sql="sELECT tieude, SUBSTRING(noidung,1,150), hinh, date, id from contentlist 
  where DATEDIFF(CURDATE(), date) between 0 and 7 and tag = 'tin sach'
  limit 6
  ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
      while($row=mysqli_fetch_assoc($result)){
      echo '
          <div class="g2">
          <a href="content.php?id='.$row["id"].'">
             <img src="'.$row["hinh"].'"class="pic" alt="">
             <div class="title2">'.$row["tieude"].'</div>
             <div class="mota">'.$row["SUBSTRING(noidung,1,150)"].'</div>
             </a>
          </div>

      ';
    }
    return $row;
    }
    else {
      echo "0";
    }
    mysqli_close($conn);
}
function review1(){
  $conn=mysqli_connect("localhost","root","","realbook");
  $sql="sELECT tieude, hinh, date, id from contentlist 
  where DATEDIFF(CURDATE(), date) between 0 and 7 and tag = 'review sach'
  limit 5
  ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result)){
      echo '
        <a href="content.php?id='.$row["id"].'">
          <div class="r1">
            <img src="'.$row["hinh"].'" alt="">
            <div class="r2">
              <div class="title3">'.$row["tieude"].'</div>
              <div class="it3">
                <span> 
                  <img src="https://i.imgur.com/42mPhdJ.png" alt="">
                  '.$row["date"].'
                 </span>
              <br>
              </div>
            </div>
           </div>
        </a> 
    ';
    }
    return $row;
    }
    else {
      echo "0";
    }
    mysqli_close($conn);


}
function goiysach(){
  $conn=mysqli_connect("localhost","root","","realbook");
  $sql="sELECT tieude, SUBSTRING(noidung,1,450), hinh, date, id from contentlist 
  where DATEDIFF(CURDATE(), date) between 0 and 7 and tag = 'goi y sach'
  limit 3
  ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
      while($row=mysqli_fetch_assoc($result)){
        echo '
          <div class="m1">
            <a href="content.php?id='.$row["id"].'">
              <img src="'.$row["hinh"].'" alt="">
              <div class="title2">'.$row["tieude"].'</div>
              <div class="mota">'.$row["SUBSTRING(noidung,1,450)"].'</div>
            </a>   
          </div>
      ';
    }
    return $row;
    }
    else {
      echo "0";
    }
    mysqli_close($conn);

}
function cafe(){
  $conn=mysqli_connect("localhost","root","","realbook");
  $sql="sELECT tieude, SUBSTRING(noidung,1,150), hinh, date, id from contentlist 
  where DATEDIFF(CURDATE(), date) between 0 and 7 and tag = 'cafe sach'
  limit 4
  ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
      while($row=mysqli_fetch_assoc($result)){
        echo' 
          <div class="nd1">
            <a href="content.php?id='.$row["id"].'">
            <img src=" '.$row["hinh"].' " alt="">
            <div class="m2">
              <div class="title2">'.$row["tieude"].'</div>
              <div class="mota">'.$row["SUBSTRING(noidung,1,150)"].'</div>
            </a>
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

}

function review2(){
  $conn=mysqli_connect("localhost","root","","realbook");
  $sql="sELECT tieude, hinh, date, id from contentlist 
  where DATEDIFF(CURDATE(), date) between 7 and 10 and tag = 'review sach'
  limit 5
  ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
      while($row=mysqli_fetch_assoc($result)){
        echo '
          <a href="content.php?id='.$row["id"].'">
            <div class="r1">
                <img src="'.$row["hinh"].'" alt="">
                <div class="r2">
                  <div class="title3">'.$row["tieude"].'</div>
                  <div class="it3">
                    <span> 
                      <img src="https://i.imgur.com/42mPhdJ.png" alt="">
                        '.$row["date"].'
                    </span>
                  <br>
                  </div>
                </div>
            </div>
          </a> 
    ';
    }
    return $row;
    }
    else {
      echo "0";
    }
    mysqli_close($conn);

}
