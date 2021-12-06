
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="homepage.css" /> -->
    <link href="homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      href="https://fonts.googleapis.com/css?family=Oswald"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:300"
      rel="stylesheet"
      type="text/css"
    />
     <!-- Bootstrap CSS -->
     <link
     rel="stylesheet"
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous"
   />
    <title>Real Book</title>
  </head>
  <body>
    <div class="container-my">
      <div class="navbar-my">
        <a href="homepage.php">
          <img src="https://i.imgur.com/Ih4Cbv2.png" alt="" />
        </a>
        <div class="list">
          <div class="tin">
            <a href="tinsach.php" >
              <div class="chu">
              <img src="https://i.imgur.com/Yv917Nm.png" alt="" />
              <p>Tin Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>
            </a>
          </div>

          <div class="review">
            <a href="review.php"
              >
              <div class="chu">
              <img src="https://i.imgur.com/Mp1Jbku.png" alt="" />
              <p>Review Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>
            </a>
          </div>

          <div class="cafe">
            <a href="cafesach.php"
              >
              <div class="chu">
              <img src="https://i.imgur.com/k9S2y8Y.png" alt="" />
              <p>Cafe Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>
            </a>
          </div>

          <div class="goiy">
            <a href="goiysach.php"
              >
              <div class="chu">
                <img src="https://i.imgur.com/AtyL8Y2.png" alt="" />
              <p>Gợi Ý Sách</p>
              </div>
              <div class="icon">
              <img src="https://i.imgur.com/F6wuHgN.png" alt="" ></div>

            </a>
          </div>
        </div>

        <div class="search-1">
          <input type="text" class="search" placeholder="Nhập từ khoá..."> 
          <a href="#"><img src="https://i.imgur.com/oqccuuD.png" alt="" /></a>
        </div>
      </div>
      <div class="header">
        <div id="slide" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="https://i.imgur.com/MOnS2wA.jpg" alt="" />
            </div>
            <div class="carousel-item">
              <img src="https://i.imgur.com/ruPq0uJ.jpg" alt="" />
            </div>
            <div class="carousel-item">
              <img src="https://i.imgur.com/uCvA5D7.jpg" alt="" />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#slide"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#slide"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <a href="#">
          <p class="name">REAL BOOK</p>
          </a>

          <i><p class="slogan">For Real Life</p></i>
        </div>
      </div>

      <div class="content">
        <div class="top">
          <div class="news">
            <?php
              include_once('homepage .inc .php');
              tin1();
              tin2();
            ?>
          </div>
          <div class="resach">
            <div class="title">
                <h3>Review Sách</h3>
            </div>       
            <?php
              include_once('homepage .inc .php');
              review1();
            ?>
         </div>
        </div>
          <div class="middle">
            <div class="title">
              <h3>Gợi Ý Sách</h3>
            </div>
            <div class="nd">
            <?php
            include_once('homepage .inc .php');
            goiysach();
            ?>
            </div>
          </div> 

        <div class="bottom">
          <div class="cafe">
            <div class="title">
              <h3>Cafe Sách</h3>
            </div>
            <?php
              include_once('homepage .in .php');
              cafe();
            ?>
          </div>

          <div class="resach">
            <div class="title">
                <h3>Review Sách</h3>
            </div>
            <?php 
            include_once('homepage .inc .php');
            review2();
            ?>
            </div>

        </div>
      </div>

  <div class="footer-my">
    <div class="top">
     <img src="https://i.imgur.com/Ih4Cbv2.png" alt="">
      <p>REAL BOOK</p>
    </div>
    <div class="down">
      <div class="left">
        <p>ABOUT US: <br> <br>
        Mọi bài viết đăng tải trên trang web được chắt lọc và tổng hợp từ các bài viết, ý kiến các chuyên gia và sách báo để đem đến cho bạn đọc nguồn thông tin đa dạng chính xác. </p> 
      </div>
      <div class="right">
        <p>
          CÁC TRANG:
          <br> <br>
          <li> <a href="contact.html"> Liên Hệ </a>
          <li> <a href="introduce.html"> Giới Thiệu </a>
          <li> <a href="copyright.html"> Bản Quyền </a>
        </p>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
