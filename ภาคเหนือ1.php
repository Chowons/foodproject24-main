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
  <title>ภาคเหนือ</title>
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
              <li><a class="nav__link" href="./ภาคเหนือ1.php">ภาคเหนือ</a></li>
              <li><a class="nav__link" href="./ภาคอีสาน1.php">ภาคอีสาน</a></li>
              <li><a class="nav__link" href="./ภาคกลาง1.php">ภาคกลาง</a></li>
              <li><a class="nav__link" href="./ภาคใต้1.php">ภาคใต้</a></li>
              <li><a class="nav__link" href="./เกี่ยวกับ1.php">เกี่ยวกับ</a></li>
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
        NORTH Memu
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
            <img src="./images/แกงอ่อม.jpg" alt="food img">
          </div>
          <div class="ourSpecials__item__info">
            <h3 class="ourSpecials__item__title">
              แกงอ่อมเนื้อ
            </h3>
            <div class="ourSpecials__food__item">แกงอ่อมเนื้อ นิยมใช้เนื้อวัวและเครื่องในวัว เป็นส่วนผสมหลัก บ้างใช้เนื้อควายและเครื่องในควายเป็นส่วนผสม บ้างใช้แต่เครื่องใน เรียกชื่อตามเนื้อที่นำมาแกง เช่น แกงอ่อมเครื่องในวัว 
              แกงอ่อมเครื่องในหมู แกงอ่อมเครื่องในควาย<br>
              .
            </div>
            <div class="button__wrapper">
              <a href="./foodn/แกงอ่อม.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
            
            <!-- <div class="ourSpecials__item__stars">
              <img src="./images/3star.png" alt="3 stars">
            </div> -->
          </div>
        </div>
        <div class="ourSpecials__item">
          <div class="ourSpecials__item__img">
            <img src="./images/น้ำพริกหนุ่ม.jpg" alt="food img">
          </div>
          <div class="ourSpecials__item__info">
            <h3 class="ourSpecials__item__title">
              น้ำพริกหนุ่ม
            </h3>
            <div class="ourSpecials__food__item">อาหารพื้นบ้านภาคเหนือที่ใช้พริกหนุ่มนำมาย่างกับหอมแดงและกระเทียม พริกหนุ่ม คือพริกเม็ดใหญ่ที่มีขนาดเล็กกว่าพริกหยวกจะมีลักษณะยาวเรียว บางทีก็เรียกกันว่าพริกหอมหรือพริกอ่อน เอามาตำเป็นน้ำพริกหนุ่มกินคู่กับผักและแคบหมูกรอบ ๆ  
            </div>
            <div class="button__wrapper">
              <a href="./foodn/น้ำพริกหนุ่ม.html" class="btn primary-btn" target="_blank">More...</a>
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
            <img src="./images/ขนมจีนน้ำเงี้ยว.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ขนมจีนน้ำเงี้ยว
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/ขนมจีนน้ำเงี้ยว.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ข้าวซอยไก่.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ข้าวซอยไก่<br>
              
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/ข้าวซอยไก่.html" class="btn primary-btn" target="_blank">More...</a>
            </div>                     
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แกงโฮะ.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แกงโฮะ
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/แกงโฮะ.html" class="btn primary-btn" target="_blank">More...</a>
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
            <img src="./images/ไส้อั่ว.webp" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ไส้อั่ว
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/ไส้อั่ว.html" class="btn primary-btn" target="_blank">More...</a>
            </div>  
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ไข่ป่าม.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ไข่ป่าม
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/ไข่ป่าม.html" class="btn primary-btn" target="_blank">More...</a>
            </div> 
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/จอผักกาด.png" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              จอผักกาด
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/จอผักกาด.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/ข้าวกั๊นจิ๊น.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              ข้าวกั๊นจิ๊น
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/ข้าวกั๊นจิ๊น.html" class="btn primary-btn" target="_blank">More...</a>
            </div>
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แกงกระด้าง.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แกงกระด้าง
            </h3>
            <div class="button__wrapper">
              <a href="./foodn/แกงกระด้าง.html" class="btn primary-btn" target="_blank">More...</a>
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
              <a href="./ภาคเหนือ1.php">ภาคเหนือ</a>
            </li>
            <li>
              <a href="./ภาคอีสาน1.php">ภาคอีสาน</a>
            </li>
            <li>
              <a href="./ภาคกลาง1.php">ภาคกลาง</a>
            </li>
            <li>
              <a href="./ภาคใต้1.php">ภาคใต้</a>
            </li>
            <li>
              <a href="เกี่ยวกับ1.php">เกี่ยวกับ</a>
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