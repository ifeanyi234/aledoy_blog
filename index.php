<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- link to Roboto Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- link to css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- header section -->

    <header class="header">
      <div class="logo">
        <a href="index.php" class="logo__link">
          <img src="./img/logo.png" alt="Logo of Aledoy Academy" />
        </a>
      </div>
      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__item"><a href="#" class="nav__link">Home</a></li>
          <li class="nav__item"><a href="#" class="nav__link">News</a></li>
          <li class="nav__item"><a href="#" class="nav__link">Trends</a></li>
          <li class="nav__item"><a href="#" class="nav__link">How-Tos</a></li>
        </ul>
        <button class="btn btn__primary">Contact</button>
        <span class="close_btn">&times;</span>
      </nav>
      <div class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </header>

    <!-- blog title section -->

    <section class="blog__title">
      <span class="small__heading">____ Blog</span>
      <h1>Exploring the Future Tech Trends and Innovations</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur. Ultricies vitae donec lacus leo.
        Vel arcu donec in sit nunc. Quis morbi ipsum justo nec vulputate.
      </p>
    </section>

    <!-- tech news section -->
    <section class="tech_news">
      <div class="tech_new-img">
        <img src="./img/tech_new.png" alt="Tech News Image" />
      </div>
      <div class="tech_news-content">
        <span class="small__heading">____ Tech News</span>
        <h2>Exploring the Future Tech Trends and Innovations</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur. Ultricies vitae donec lacus
          leo. Vel arcu donec in sit nunc. Quis morbi ipsum justo nec vulputate.
        </p>
        <a href="blog.php"
          ><button class="btn btn__primary-light">Read more</button></a
        >
      </div>
    </section>

    <!-- popular post section -->
    <section class="popular__post">
      <div class="heading__container"><h3>Popular Posts</h3></div>
      <div class="posts__container">
        <div class="post">
          <img src="./img/popular_post_1.png" alt="Post one" />
          <div class="post__detail">
            <p>Wearable Tech: Fashion Meets Functionality in the Digital Age</p>
            <a href="#">Read more &rarr;</a>
          </div>
        </div>
        <div class="post">
          <img src="./img/popular_post_2.png" alt="Post two" />
          <div class="post__detail">
            <p>Wearable Tech: Fashion Meets Functionality in the Digital Age</p>
            <a href="#">Read more &rarr;</a>
          </div>
        </div>
        <div class="post">
          <img src="./img/popular_post_3.png" alt="Post three" />
          <div class="post__detail">
            <p>Wearable Tech: Fashion Meets Functionality in the Digital Age</p>
            <a href="#">Read more &rarr;</a>
          </div>
        </div>
        <div class="post">
          <img src="./img/popular_post_4.png" alt="Post four" />
          <div class="post__detail">
            <p>Wearable Tech: Fashion Meets Functionality in the Digital Age</p>
            <a href="#">Read more &rarr;</a>
          </div>
        </div>
        <div class="post">
          <img src="./img/popular_post_5.png" alt="Post five" />
          <div class="post__detail">
            <p>Wearable Tech: Fashion Meets Functionality in the Digital Age</p>
            <a href="#">Read more &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- mailing section -->

    <section class="mailing__container">
      <div class="mailing__heading">
        <h3>Join our mailing list to get exclusive updates</h3>
      </div>
      <form method="post" class="mailing__form">
        <input
          type="email"
          class="mailing__input"
          name="email"
          placeholder="Enter your email here"
        />
        <button type="submit" class="btn--2">Subscribe</button>
      </form>
    </section>

    <!-- footer section -->
    <footer class="footer">
      <div class="footer__content">
        <div class="footer__about">
          <img src="./img/logo.png" alt="footer logo" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
            varius enim in eros. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Suspendisse varius enim in eros. Lorem ipsum dolor
            sit amet, consectetur adipiscing elit. Suspendisse varius enim in
            eros.
          </p>
        </div>
        <div class="footer__quick-links">
          <h3>Quick Links</h3>
          <ul class="quick__list">
            <li class="quick__item">
              <a href="#" class="quick__link">Home</a>
            </li>
            <li class="quick__item">
              <a href="#" class="quick__link">News</a>
            </li>
            <li class="quick__item">
              <a href="#" class="quick__link">Tech News</a>
            </li>
            <li class="quick__item">
              <a href="#" class="quick__link">How Tos</a>
            </li>
          </ul>
        </div>
        <div class="footer__contact-sec">
          <h3>Contact Us</h3>
          <div class="contact__details">
            <div class="details__item">
              <span>
                <svg class="icon">
                  <use xlink:href="./img/sprites.svg#icon-Phone"></use>
                </svg>
              </span>
              <span>Tel: 234-1-749 7322, 234 803 304 2676.</span>
            </div>
          </div>
          <div class="contact__details">
            <div class="details__item">
              <span>
                <svg class="icon">
                  <use xlink:href="./img/sprites.svg#icon-Email "></use>
                </svg>
              </span>
              <span>Aledoyacademyblog.com</span>
            </div>
          </div>
          <div class="contact__details">
            <div class="details__item">
              <span>
                <svg class="icon">
                  <use xlink:href="./img/sprites.svg#icon-Pin"></use>
                </svg>
              </span>
              <span
                >Abbey Mortgage Bank Building, 51 Okota Road, Chemist Bus Stop,
                Okota-Isolo Lagos, Nigeria</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="copy__right">
        <span>&copy; 2023 Aledoy Academy News. All rights reserved</span>
        <div class="footer__social">
          <svg class="icon">
            <use xlink:href="./img/sprites.svg#icon-instagram"></use>
          </svg>
          <svg class="icon">
            <use xlink:href="./img/sprites.svg#icon-facebook"></use>
          </svg>
          <svg class="icon">
            <use xlink:href="./img/sprites.svg#icon-twitter"></use>
          </svg>
          <svg class="icon">
            <use xlink:href="./img/sprites.svg#icon-linkedin2"></use>
          </svg>
        </div>
      </div>
    </footer>
    <script src="./js/script.js"></script>
  </body>
</html>
