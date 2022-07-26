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
  <title>ภาคใต้</title>
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
        SOUTH Memu
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
            <img src="./images/ผัดสะตอกุ้งสด.webp" alt="food img">
          </div>
          <div class="ourSpecials__item__info">
            <h3 class="ourSpecials__item__title">
              ผัดสะตอกุ้งสด
            </h3>
            <div class="ourSpecials__food__item">เมนูอาหารชื่อดังของภาคใต้ 
              รสชาติเข้มข้นเผ็ดร้อน หอมอร่อยจัดจ้าน กุ้งหวานๆ ผัดกับสะตอกรุบกรอบๆ 
              หอมพริกแกงสมุนไพรต่างๆ หอมกะปิมาก 
              รับประทานกับข้าวสวยร้อนๆ หอมอร่อยเข้ากันมาก

              
            </div>
            <div class="button__wrapper">
              <a href="./foods/ผัดสะตอกุ้งสด.html" class="btn primary-btn" target="_blank">More...</a>
            </div>            
          </div>
        </div>
        <div class="ourSpecials__item">
          <div class="ourSpecials__item__img">
            <img src="./images/คั่วกลิ้งหมู.jpg" alt="food img">
          </div>
          <div class="ourSpecials__item__info">
            <h3 class="ourSpecials__item__title">
              คั่วกลิ้งหมู
            </h3>
            <div class="ourSpecials__food__item">คั่วกลิ้ง เป็นอาหารพื้นบ้านภาคใต้ 
              เป็นการนำเนื้อสัตว์ เช่น หมู ไก่ เนื้อวัว มาคั่วกับเครื่องแกงจนแห้ง และเข้าเนื้อ รสจัด 
              และเข้มข้น นิยมรับประทานคู่กับผักสด เช่นเดียวกับ ลาบของภาคอื่นๆ ที่เรียกว่า คั่วกลิ้ง 
              มาจากวิธีทำที่ต้องคั่วส่วนผสมกลิ้งไปกลิ้งมาบนกระทะจนแห้งได้ที่<br>
            </div>
            <div class="button__wrapper">
              <a href="./foods/คั่วกลิ้งหมู.html" class="btn primary-btn" target="_blank">More...</a>
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
            <img src="./images/ผัดสะตอสามรส1.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ผัดสะตอสามรส
            </h3>
            <div class="button__wrapper">
              <a href="./foods/ผัดสะตอสามรส.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แกงเหลืองมะละกอกุ้ง.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แกงเหลืองมะละกอกุ้ง<br>
            </h3>
            <div class="button__wrapper">
              <a href="./foods/แกงเหลืองมะละกอกุ้ง.html" class="btn primary-btn" target="_blank">More...</a>
            </div>                     
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แกงไตปลา.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แกงไตปลา
            </h3>
            <div class="button__wrapper">
              <a href="./foods/แกงไตปลา.html" class="btn primary-btn" target="_blank">More...</a>
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
            <img src="./images/ไก่กอและ.webp" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ไก่กอและ
            </h3>
            <div class="button__wrapper">
              <a href="./foods/ไก่กอและ.html" class="btn primary-btn" target="_blank">More...</a>
            </div>  
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แกงเหลืองปลากะพง.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แกงเหลืองปลากะพง
            </h3>
            <div class="button__wrapper">
              <a href="./foods/แกงเหลืองปลากะพง.html" class="btn primary-btn" target="_blank">More...</a>
            </div> 
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/หมูโค๊ะ.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              หมูโค๊ะ
            </h3>
            <div class="button__wrapper">
              <a href="./foods/หมูโค๊ะ.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ผัดไทยไชยา.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ผัดไทยไชยา
            </h3>
            <div class="button__wrapper">
              <a href="./foods/ผัดไทยไชยา.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แกงส้มหน่อไม้ดอง1.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แกงส้มหน่อไม้ดอง
            </h3>
            <div class="button__wrapper">
              <a href="./foods/แกงส้มหน่อไม้ดอง.html" class="btn primary-btn" target="_blank">More...</a>
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