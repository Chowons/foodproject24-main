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
  <title>ภาคอีสาน</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./menu.css">
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
  <!-- page Title -->
  <section id="page__title" data-aos="fade-up">
    <div class="container">
      <h2 class="page__title__text">
        NORTH EAST Memu
      </h2>
    </div>
  </section>
  <!-- Our Specials -->
  <section id="ourSpecials" data-aos="fade-up">
    <div class="container">
      <h3 class="ourSpecials__title">เมนูพิเศษ</h3>
      <div class="ourSpecials__wrapper">
        <div class="ourSpecials__item">
          <div class="ourSpecials__item__img">
            <img src="./images/ส้มตำไทยไข่เค็ม.jpg" alt="food img">
          </div>
          <div class="ourSpecials__item__info">
            <h3 class="ourSpecials__item__title">
              ส้มตำไทยไข่เค็ม
            </h3>
            <div class="ourSpecials__food__item">แทบจะเรียกได้ว่าเป็นเมนูคู่คนไทยไปแล้ว 
              ไม่ใช่แค่อาหารอีสานตามที่มา เพราะทุกวันนี้ไม่ว่าจะเป็นภัตตาคารร้านหรู หรือลงมาอยู่ข้างถนน 
              ส้มตำก็มีให้คนทุกภาคทุกรสนิยมได้กิน 
              หนึ่งในเมนูฮิตก็คือ “ส้มตำไข่เค็ม” หรือที่นิยมเรียกกันว่า “ตำไทยไข่เค็ม”<br>
              
            </div>
            <div class="button__wrapper">
              <a href="./foodne/ส้มตำไทยไข่เค็ม.html" class="btn primary-btn" target="_blank">More...</a>
            </div>            
          </div>
        </div>
        <div class="ourSpecials__item">
          <div class="ourSpecials__item__img">
            <img src="./images/ลาบหมู.jpg" alt="food img">
          </div>
          <div class="ourSpecials__item__info">
            <h3 class="ourSpecials__item__title">
              ลาบหมู
            </h3>
            <div class="ourSpecials__food__item">เมนูลาบ นั้นเป็นอาหารทางภาคอีสาน
              เมนูนี้นั้นต้นกำเนิดของเมนูนี้ 
              ได้รับอิทธิพลมาจาก เวียงจันทน์ โดยเริ่มเข้ามาจากทางภาคอีสาน 
              และทางภาคเหนือของประเทศไทย โดยเนื้อสัตว์เป็นวัตถุดิบหลักในการปรุงและยังเน้นไปที่สมุนไพร 
              และเติมเอกลักษณ์สำคัญของเมนูนี้ลงนั้นนั้นก็คือ รสชาติที่จัดจ้าน 
            </div>
            <div class="button__wrapper">
              <a href="./foodne/ลาบหมู.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
            <!-- <div class="ourSpecials__item__stars">
              <img src="./images/3star.png" alt="3 stars">
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Specials -->
  <!-- Top Dishes -->
  <section id="dishGrid" data-aos="fade-down">
    <div class="container">
      <h2 class="dishGrid__title">
        อาหารที่แนะนำ
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ไส้กรอกอีสาน.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ไส้กรอกอีสาน
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/ไส้กรอกอีสาน.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ปลาส้ม.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ปลาส้ม<br>
              
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/ปลาส้ม.html" class="btn primary-btn" target="_blank">More...</a>
            </div>                     
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ก้อย.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ก้อย
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/ก้อย.html" class="btn primary-btn" target="_blank">More...</a>
            </div>             
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Dishes -->
  <!-- Breakfast Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        อาหารทั่วไป
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ข้าวจี่.webp" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ข้าวจี่
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/ข้าวจี่.html" class="btn primary-btn" target="_blank">More...</a>
            </div>  
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/หมกหน่อไม้.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              หมกหน่อไม้
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/หมกหน่อไม้.html" class="btn primary-btn" target="_blank">More...</a>
            </div> 
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ซุปบักมี่.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ซุปบักมี่
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/ซุปบักมี่.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ตับหวาน.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ตับหวาน
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/ตับหวาน.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ลาบไข่ต้มยางมะตูม.webp" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ลาบไข่ต้มยางมะตูม
            </h3>
            <div class="button__wrapper">
              <a href="./foodne/ลาบไข่ต้มยางมะตูม.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Breakfast Dishes -->
  <!-- Lunch Dishes -->
  <!-- <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Lunch
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Lunch Dishes -->
  <!-- Dinner Dishes -->
  <!-- <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        Dinner
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/food-1.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              Hot Green Bowl
            </h3>
            <h3 class="dishGrid__item__price">$12</h3>
            <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Dinner Dishes -->
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
  <!-- aos script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom script -->
  <script src="./main.js"></script>
</body>

</html>