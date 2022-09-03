<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/anya.png" type="image/x-icon">
  <title>เกี่ยวกับ</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="./about.css">
</head>

<body>
  <!-- Nav Section -->
  <div class="nav">
    <div class="container">
      <div class="nav__wrapper">
        <a href="./user.php" class="logo">
          <img src="./images/logo4.png" alt="shaif's cuisine">
        </a>
        <nav>
          <div class="nav__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-menu">
              <line x1="3" y1="12" x2="21" y2="12" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <line x1="3" y1="18" x2="21" y2="18" />
            </svg>
          </div>
          <div class="nav__bgOverlay"></div>
          <ol class="nav__list">
            <div class="nav__close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </div>
            <div class="nav__list__wrapper">

            <li><a class="nav__link" href="./user.php">Home</a></li>
              <li><a class="nav__link" href="./north2.php">ภาคเหนือ</a></li>
              <li><a class="nav__link" href="./northeast2.php">ภาคอีสาน</a></li>
              <li><a class="nav__link" href="./middle2.php">ภาคกลาง</a></li>
              <li><a class="nav__link" href="./south2.php">ภาคใต้</a></li>
              <li><a class="nav__link" href="./about2.php">เกี่ยวกับ</a></li>
              <li><a class="nav__link" href="./contact2.php">Contact</a></li>
              <li><a class="nav__link" href="./comment1.php" target="_blank">Comment</a></li>
              <li><a href="./home.php" class="btn primary-btn">Logout</a></li>
            </div>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Nav Section -->
  <!-- Our Story Section -->
  <section id="ourStory" data-aos="fade-up">
    <div class="container">
      <div class="ourStory__wrapper">

        <div class="ourStory__img">
          <img src="./images/อาหาร4ภาค1.jpg" alt="shaif's cuisine">
        </div>
        <div class="ourStory__info">
          <h3 class="ourStory__title">
            อาหารไทย
          </h3>
          <p class="ourStory__subtitle">
            4 ภาค
          </p>
          <p class="ourStory__text">
            อาหารไทยมีมากมายหลากหลายเมนู ทั้งเป็นที่รู้จักโดยทั่วไปและอาจจะไม่เคยได้ยินชื่อเสียงเรียงนามของเมนูนั้นๆ มาก่อนเลยก็ได้ ยิ่งหากเป็นอาหารไทยทั้ง 4 ภาคแล้ว…เหนือ กลาง อีสาน และใต้ ความอร่อยของแต่ละท้องถิ่นย่อมแตกต่างกันไปตามวัฒนธรรมและประเพณีแต่เก่าก่อน 
            <br><br>
            
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Story Section -->
  <!-- Our Goals -->
  <section id="ourGoals" data-aos="fade-down">
    <div class="container">
      <div class="ourGoals__info">
        <h3 class="ourGoals__title">
          อาหารแต่ละภาค
        </h3>
        <p class="ourGoals__text">
          อาหารภาคเหนือ: แกงอ่อมเนื้อ  น้ำพริกหนุ่ม  ขนมจีนน้ำเงี้ยว<br>
            อาหารภาคอีสาน: ส้มตำไทยไข่เค็ม  ลาบหมู  ไส้กรอกอีสาน<br>
            อาหารภาคกลาง: ผัดกะเพราหมูสับ  ต้มยำกุ้งน้ำข้น  แกงเทโพ<br>
            อาหารภาคใต้: ผัดสะตอกุ้งสด  คั่วกลิ้งหมู  แกงไตปลา<br>
        </p>
      </div>
      <div class="ourGoals__imgs__wrapper" data-aos="fade-up">
        <div class="ourGoals__img1">
          <img src="./images/ส้มคำไทยไข่เค็ม.jpg" alt="kitchen img">
        </div>
        <div class="ourGoals__img2">
          <img src="./images/แกงเทโพ.jpg" alt="kitchen img">
        </div>
        <div class="ourGoals__img3">
          <img src="./images/แกงไตปลา1.jpg" alt="kitchen img">
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Goals -->
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__col1">
          <div class="footer__logo">
            <img src="./images/anya.png" alt="shaif's cuisine">
          </div>
          <p class="footer__desc">
            เว็บไซค์เพื่อการเรียนรู้<br>ด้านอาหาร 4 ภาคของประเทศไทย
          </p>
          <div class="footer__socials">
            <h4 class="footer__socials__title">Follow us</h4>
            <ol class="footer__socials__list">
              <li>
                <a href="https://www.facebook.com/profile.php?id=100007748142493" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                  </svg>
                </a>
              </li>
              <!-- <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-instagram">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                  </svg>
                </a>
              </li> -->
              <!-- <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-twitter">
                    <path
                      d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                  </svg>
                </a>
              </li> -->
            </ol>
          </div>
        </div>
        <div class="footer__col2">
          <h3 class="footer__text__title">
            Links
          </h3>
          <ol class="footer__text">
          <li>
              <a href="./user.php">Home</a>
            </li>
            <li>
              <a href="./north2.php">ภาคเหนือ</a>
            </li>
            <li>
              <a href="./northeast2.php">ภาคอีสาน</a>
            </li>
            <li>
              <a href="./middle2.php">ภาคกลาง</a>
            </li>
            <li>
              <a href="./south2.php">ภาคใต้</a>
            </li>
            <li>
              <a href="about2.php">เกี่ยวกับ</a>
            </li>
          </ol>
        </div>
        <div class="footer__col3">
          <h3 class="footer__text__title">
            Support
          </h3>
          <ol class="footer__text">
            <li>
              <a href="./contact2.php">Contact</a>
            </li>
            <li>
              <a href="./เกี่ยวกับ1.php">เกี่ยวกับ</a>
            </li>
            <!-- <li>
              <a href="#">Feedback</a>
            </li> -->
          </ol>
        </div>
        <div class="footer__col4">
          <h3 class="footer__text__title">
            Contact
          </h3>
          <ol class="footer__text">
            <li>
              <a href="#">+66 0968054317</a>
            </li>
            <li>
              <a href="#">CH.Chanonlien@gmail.com</a>
            </li>
            <li>
              <a href="#">SB-TECH</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </footer>
  <div id="copyright">
    <div class="container">
      <p class="copyright__text">
        © copyright 2021 Shaif’s Cuisine | All rights reserved
      </p>
    </div>
  </div>
  <!-- End Footer -->

  <!-- aos scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom scripts -->
  <script src="./main.js"></script>
</body>

</html>