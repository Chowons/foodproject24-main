<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/anya.png" type="image/x-icon">
  <title>THAI FOOD</title>
  <link rel="stylesheet" href="./reset.css">
  <link rel="stylesheet" href="./globalStyles.css">
  <link rel="stylesheet" href="./components.css">
  <!-- aos library css  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Add your custom css -->
  <link rel="stylesheet" href="./home.css">
</head>

<body>
  <!-- Nav Section -->
  <div class="nav">
    <div class="container">
      <div class="nav__wrapper">
        <a href="./home.php" class="logo">
          <img src="./images/logo4.png" alt="Thai Food">
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
          <ul class="nav__list">
            <div class="nav__close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
              </svg>
            </div>
            <div class="nav__list__wrapper">

              <li><a class="nav__link" href="./home.php">Home</a></li>
              <li><a class="nav__link" href="./ภาคเหนือ.html">ภาคเหนือ</a></li>
              <li><a class="nav__link" href="./ภาคอีสาน.html">ภาคอีสาน</a></li>
              <li><a class="nav__link" href="./ภาคกลาง.html">ภาคกลาง</a></li>
              <li><a class="nav__link" href="./ภาคใต้.html">ภาคใต้</a></li>
              <li><a class="nav__link" href="./เกี่ยวกับ.html">เกี่ยวกับ</a></li>
              <li><a class="nav__link" href="./contact.html">Contact</a></li>
              <li><a href="./signin.php" class="btn primary-btn">Login</a></li>
            </div>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Nav Section -->
  <!-- Hero Section -->
  <section id="hero">
    <div class="container">
      <div class="hero__wrapper">
        <div class="hero__left" data-aos="fade-left">
          <div class="hero__left__wrapper">

            <h1 class="hero__heading">อาหารไทย 4 ภาค</h1>
            <p class="hero__info">
              อาหารไทยมีมากมายหลากหลายเมนู ทั้งเป็นที่รู้จักโดยทั่วไปและอาจจะไม่เคยได้ยินชื่อเสียงเรียงนามของเมนูนั้นๆ มาก่อนเลยก็ได้ 
              ยิ่งหากเป็นอาหารไทยทั้ง 4 ภาคแล้ว เหนือ กลาง อีสาน และ ใต้ 
              ความอร่อยของแต่ละท้องถิ่นย่อมแตกต่างกันไปตามวัฒนธรรมและประเพณีแต่เก่าก่อน
            </p>
            <div class="button__wrapper">
              <a href="./เกี่ยวกับ.html" class="btn primary-btn">เกี่ยวกับ</a>
              <a href="./contact.html" class="btn">Contact</a>
            </div>
          </div>
        </div>
        <div class="hero__right" data-aos="fade-right">
          <div class="hero__imgWrapper">
            <img src="./images/อาหาร4ภาค.jpg">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->
  <!-- Store Info Section -->
  <section id="storeInfo" data-aos="fade-up">
    <div class="container">
      <div class="storeInfo__wrapper">
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/anya.png" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            Chanon
          </h3>
          <p class="storeInfo__text">
            Name
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/address-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            SB-TECH
          </h3>
          <p class="storeInfo__text">
            Address
          </p>
        </div>
        <div class="storeInfo__item">
          <div class="storeInfo__icon">
            <img src="./images/phone-icon.svg" alt="clock icon">
          </div>
          <h3 class="storeInfo__title">
            +66968054317
          </h3>
          <p class="storeInfo__text">
            Call Now
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Store Info Section -->
  <!-- Our Specials Section -->
  <section id="ourSpecials" data-aos="fade-up">
    <div class="container">
      <div class="ourSpecials__wrapper">
        <div class="ourSpecials__left">
          <div class="ourSpecials__item">
            <div class="ourSpecials__item__img">
              <img src="./images/tomyumkung.jpg" alt="food img">
            </div>
            <h2 class="ourSpecials__item__title">
              ต้มยำกุ้ง
            </h2>
            <h3 class="ourSpecials__item__price">
              Tom Yum Kung
            </h3>
            <div class="ourSpecials__item__stars">
              <img src="./images/3star.png" alt="3 stars">
            </div>
            <p class="ourSpecials__item__text">
            ต้มยำกุ้งน้ำข้น เป็นอาหารที่ขึ้นชื่อของบ้านเรา และโด่งดังไปไกลในระดับโลก ถึงขนาดที่ว่าถ้าใครมาเมืองไทย แล้วไม่ได้กินต้มยำกุ้งน้ำข้น ก็เหมือนมาไม่ถึง แต่สงสัยมั้ยว่า บางร้านก็มีเมนูต้มยำกุ้ง แต่ทำไมพอมาถึงโต๊ะแล้วดันเป็นน้ำใส แล้วต้มยำกุ้งจริง ๆ แล้วมันต้องน้ำข้นหรือน้ำใสกันแน่นะ
            </p>
          </div>
          <div class="ourSpecials__item">
            <div class="ourSpecials__item__img">
              <img src="./images/papayasalad.webp" alt="food img">
            </div>
            <h2 class="ourSpecials__item__title">
              ส้มตำ
            </h2>
            <h3 class="ourSpecials__item__price">
              Papaya Salad
            </h3>
            <div class="ourSpecials__item__stars">
              <img src="./images/3star.png" alt="3 stars">
            </div>
            <p class="ourSpecials__item__text">
            ส้มตำ เป็นอาหารปรุงมาจากการทำตำส้ม คือการทำให้เปรี้ยว ในลาวจะเรียกว่าตำหมากหุ่ง ปรุงโดยนำมะละกอดิบที่สับแล้วฝานหรือขูดเป็นเส้นมาตำในครกเป็นหลัก พร้อมด้วยวัตถุดิบอื่น ๆ คือ มะเขือเทศลูกเล็ก มะเขือสีดา มะเขือเปราะ พริกสดหรือพริกแห้ง ถั่วฝักยาว กระเทียม และปรุงรสด้วยน้ำตาลปี๊บ น้ำปลา และมะนาว
            </p>
          </div>
        </div>
        <div class="ourSpecials__right">
          <h2 class="ourSpecials__title">
            อาหารที่แนะนำ
          </h2>
          <p class="ourSpecials__text">
            ต้มยำกุ้ง และ ส้มตำ เป็นอาหารที่นิยมรับประทานกันมากในประเทศไทย เป็นอาหารที่หากินได้ง่าย
          </p>
          <a href="./signin.php" class="btn primary-btn">Login</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Specials Section -->
  <!-- Top Dishes -->
  <section id="dishGrid" data-aos="fade-up">
    <div class="container">
      <h2 class="dishGrid__title">
        เมนูแนะนำ
      </h2>
      <div class="dishGrid__wrapper">
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/krapaohmusubkaidao.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              กะเพราหมูสับไข่ดาว
            </h3>
            <h3 class="dishGrid__item__price">Krapao Hmusub Kaidao</h3>
            <!-- <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div> -->
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แพนงไก่1.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แพนงไก่
            </h3>
            <h3 class="dishGrid__item__price">Panang Kai</h3>
            <!-- <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div> -->
          </div>
        </div>
        <div class="dishGrid__item">
          <div class="dishGrid__item__img">
            <img src="./images/แกงอ่อม.jpg" alt="food img">
          </div>
          <div class="dishGrid__item__info">
            <h3 class="dishGrid__item__title">
              แกงอ่อม เนื้อ
            </h3>
            <h3 class="dishGrid__item__price">Thai Northern Style Beef Soup</h3>
            <!-- <div class="dishGrid__item__stars">
              <img src="./images/3star.png" alt="3 star">
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Top Dishes -->
  <!-- Discount Section -->
  <section id="discount" data-aos="fade-up">
    <div class="container">
      <div class="discount__wrapper">
        <div class="discount__images">
          <div class="discount__img1">
            <img src="./images/ข้าวสวย.jpg" alt="Food img">
          </div>
          <div class="discount__img2">
            <img src="./images/ข้าวเหนียว.jpg" alt="Food img">
          </div>
          <div class="discount__img3">
            <img src="./images/ข้าวไรซ์เบอร์รี่.jpg" alt="Food img">
          </div>
        </div>
        <div class="discount__info">
          <h3 class="discount__title">ข้าวที่นิยมกินในเมืองไทย</h3>
          <h3 class="discount__text">1.ข้าวสวย</h3>
          <h3 class="discount__text">2.ข้าวเหนียว</h3>
          <h3 class="discount__text">3.ข้าวไรซ์เบอร์รี่</h3>
          <h3 class="discount__price">
            <!-- <span class="discount__oldPrice">$45</span>
            <span class="discount__newPrice">$35</span> -->
          </h3>
          <!-- <div class="discount__stars">
            <img src="./images/3star.png" alt="3 stars">
          </div> -->
          <a class="btn primary-btn" href="./เกี่ยวกับ.html">เกี่ยวกับ</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Discount Section -->
  <!-- Events Media -->
  <section id="eventsMedia" data-aos="fade-up">
    <div class="container">
      <div class="eventsMedia__wrapper">
        <!-- <div class="eventsMedia__1">
          <img src="./images/อาหารภาคใต้.jpg" alt="events">
          <a href="#" class="eventsMedia__1__playButton">
            <img src="./images/playIcon.svg" alt="play button">
          </a>
        </div> -->
        <div class="eventMedia__2">
          <img src="./images/ใต้..jpg" alt="events">
        </div>
        <div class="eventMedia__2">
          <img src="./images/อาหารภาคใต้1.jpg" alt="events">
        </div>
        <div class="eventMedia__2">
          <img src="./images/ใต้2.jpg" alt="events">
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Media -->

  <!-- Events Info -->
  <section id="eventsInfo" data-aos="fade-up">
    <div class="container">
      <div class="eventsInfo__wrapper">
        <div class="eventsInfo__left">
          <div class="eventsInfo__item">
            <div class="eventsInfo__item__img">
              <img src="./images/sb-tech.png" alt="corporate events">
            </div>
            <div class="eventsInfo__item__info">
              <h2 class="eventsInfo__item__title">SB-TECH</h2>
              <p class="eventsInfo__item__text">
                วิทยาลัยเทคโนโลยี<br>
                สว่างบริบูรณ์พัทยา<br>
                ถ.สุขุมวิท 53<br>
                ต.หนองปรือ<br>
                อ.บางละมุง<br>
                จ.ชลบุรี 20150
              </p>
            </div>
          </div>
          <!-- <div class="eventsInfo__item">
            <div class="eventsInfo__item__img">
              <img src="./images/event-weedings.png" alt="wedding events">
            </div>
            <div class="eventsInfo__item__info">
              <h2 class="eventsInfo__item__title">Weddings</h2>
              <p class="eventsInfo__item__text">
                Shaif's Cuisine offers an intimately unique wedding experience set in a spectacular setting that is
                sophisticated and comfortable.
              </p>
            </div>
          </div> -->
        </div>
        <div class="eventsInfo__right">
          <h2 class="eventsInfo__title">Contact</h2>
          <p class="eventsInfo__text">
            มีช่องทางการติดต่อทั้ง เบอร์โทรศัพท์ หรือช่องทาง gmail or address</p>
          <a href="./contact.html" class="btn primary-btn">Contact Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Info -->
  <!-- Why Us section -->
  <section id="whyUs">
    <div class="container">
      <div class="whyUs__wrapper">
        <div class="whyUs__left" data-aos="fade-right">
          <h2 class="whyUs__title">
            Food Website Interview
          </h2>
          <p class="whyUs__text">
            เว็ปไซต์นี้แนะนำอาหารไทยแต่ละภาค ทั้ง 4 ภาค<br>
            รายชื่อ รสชาติ กระบวนการวิธีการทำอาหาร<br>
            และยังมีการที่ผู้ใช้งานสามารถ comment<br>
            เพื่อที่จะได้ รีวิว หรือแนะนำติชมได้อีกด้วย<br>
            แต่ต้อง Login เป็นสมาชิกก่อนนะครับ<br>
            .
          </p>
          <h2 class="whyUs__title">
            <a href="./signin.php" class="btn primary-btn">Login</a>
          </h2>
        </div>
      
        <div class="whyUs__right" data-aos="fade-left">
          <div class="whyUs__items__wrapper">
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon1.svg" alt="quality Food">
              </div>
              <p class="whyUs__item__text">อาหารไทย 4 ภาค</p>
            </div>
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon2.svg" alt="Classical taste">
              </div>
              <p class="whyUs__item__text">รสชาติ</p>
            </div>
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon3.svg" alt="Skilled chef">
              </div>
              <p class="whyUs__item__text">วิธีการทำ</p>
            </div>
            <div class="whyUs__item">
              <div class="whyUs__item__icon">
                <img src="./images/whyUs-icon4.svg" alt="Best service">
              </div>
              <p class="whyUs__item__text">Comment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Why Us section -->
  <!-- Testimonial Section -->
  <!-- <section id="testimonial">
    <div class="container">
      <div class="testimonial__wrapper" data-aos="fade-up">
        <h2 class="testimonial__title">What Our Customers Say</h2>
        <div class="testimonial__items__wrapper">
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Sayed Ahmed</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “Visited Shaif’s Cuisine with friends last Sunday. Really lovely meal and very warm welcome – we would
                recommend this lovely restaurant and will try to go back again”
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Arfan</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                "from start to finish, lovely experience. Hostess very pleasant, wait staff john was wonderful and
                attentive, food plentiful and delicious, desserts out of this world"
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Fahim & Nishat</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “A warm and friendly welcome with fantastic customer service. Always great, tasty food served piping
                hot- just the way we love it . Would definitely recommend. We have been repeatedly and it's consistently
                exceeded our expectations"
              </p>
            </div>
          </div>
          <div class="testimonial__item">
            <div class="testimonial__item__img">
              <img src="./images/testimonial_img1.png" alt="Sayed Ahmed">
            </div>
            <div class="testimonial__item__info">
              <h3 class="testimonial__item__name">Hussain</h3>
              <div class="testimonial__item__stars">
                <img src="./images/3star.png" alt="3 star">
              </div>
              <p class="testimonial__item__text">
                “I would just like to say thank you for the excellent service we received in your restaurant last night.
                Although the place was very busy we still had an excellent time and really appreciated the live
                entertainment too!“
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <-- End Testimonial Section -->
  <!-- Newsletter Section -->
  <!-- <section id="newsletter" data-aos="fade-up">
    <div class="container">
      <div class="newsletter__wrapper">
        <div class="newsletter__info">
          <h3 class="newsletter__title">Join Newsletter</h3>
          <p class="newsletter__text">
            Get notified with the latest news and recent offers from the “Shaif’s Cuisine”
          </p>
        </div>
        <div class="newsletter__form">
          <form action="">
            <label for="email">
              <input type="email" placeholder="Your Email Address">
            </label>
            <button type="submit">Join</button>
          </form>
        </div>
      </div>
    </div>
  </section> --> 
  <!-- End Newsletter Section -->

  <!-- comment -->
<?php 

  include_once 'controllers/Comment.php';
  $com = new Comment();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comment System OOP</title>
  <style>
      .box {
          border: 6px solid #999; 
          margin: 30px auto 0; 
          padding: 20px; 
          width: 1000px; 
          height: 250px;
          overflow: scroll;
      }
      .box ul {
          margin: 0; padding: 0; list-style: none;
      }
      .box li {
          display: block; 
          border-bottom: 1px dashed #ddd;
          margin-bottom: 5px;
          padding-bottom: 5px;
      }
      .box li:last-child {
          border-bottom: 0 dashed #ddd;
      }
      .box span {
          color: #888;
      }
  </style>
</head>
<body>

  <div class="box">
      <ul>
          <?php 
              if($result = $com->indexc()) {
              while ($data = $result->fetch_assoc()) {
          ?>
              <li>
                  <b><?php echo $data['name']; ?></b> - <?php echo $data['comment']; ?> - <?php echo $com->dateFormat($data['comment_time']); ?>
              </li>
              <?php } ?>
          <?php }?>
      </ul>
  </div>

  <br><br>

  
</body>
</html>

  
  <!-- End comment -->
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
              <a href="./home.php">Home</a>
            </li>
            <li>
              <a href="./ภาคเหนือ.html">ภาคเหนือ</a>
            </li>
            <li>
              <a href="./ภาคอีสาน.html">ภาคอีสาน</a>
            </li>
            <li>
              <a href="./ภาคกลาง.html">ภาคกลาง</a>
            </li>
            <li>
              <a href="./ภาคใต้.html">ภาคใต้</a>
            </li>
            <li>
              <a href="เกี่ยวกับ.html">เกี่ยวกับ</a>
            </li>
          </ol>
        </div>
        <div class="footer__col3">
          <h3 class="footer__text__title">
            Support
          </h3>
          <ol class="footer__text">
            <li>
              <a href="./contact.html">Contact</a>
            </li>
            <li>
              <a href="./เกี่ยวกับ.html">เกี่ยวกับ</a>
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







