<?php
// filepath: d:\ShoppingGearWebb\chair\chair05\item5.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ghế WGC207 | GameChair Pro</title>
    <link rel="stylesheet" href="item5.css" />
    <script
      src="https://kit.fontawesome.com/49e41b5211.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <div class="container nav-container">
        <a href="/ShoppingGearWebb/index.php" class="logo">Game<span>Chair</span> Pro</a>
        <ul class="nav-list">
          <li><a href="/ShoppingGearWebb/index.php">Home</a></li>
          <li class="has-dropdown">
            <a href="#">Gaming Setup</a>
            <ul class="dropdown">
              <li><a href="/ShoppingGearWebb/chair/chair.php">Chairs</a></li>
            </ul>
          </li>
          <li class="has-dropdown">
            <a href="#">Gaming Gear</a>
            <ul class="dropdown">
              <li><a href="/ShoppingGearWebb/keyboard/keyboard.php">Keyboards</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="search-btn-item"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>
          <li>
            <a href="/ShoppingGearWebb/cart.php" class="cart-icon">
              <i class="fa-solid fa-shopping-cart"></i>
              <span id="cart-count-badge">0</span>
            </a>
          </li>
        </ul>
      </div>
    </header>

    <!-- Main Content Wrapper -->
    <div class="container main-content-wrapper">
      <!-- Product Overview Section -->
      <section class="item-container">
        <div class="item-img-wrapper">
          <div class="item-img"></div>
        </div>
        <div class="item-info">
          <h1 class="item-name">Ghế WGC207</h1>
          <div class="item-rating">
            <span class="item-rate">4.2</span>
            <i class="item-icon fa-solid fa-star"></i>
          </div>
          <div class="item-price-container">
            <p class="item-price">2.000.000 VND <span class="item-price-dis">2.989.000 VND</span></p>
            <span class="discount-badge">-28%</span>
          </div>
          <div class="item-actions">
            <button class="item-btn" onclick="addToCart({
              id: 'chair05',
              name: 'Ghế WGC207',
              price: 2000000,
              category: 'Chair',
              image: '/ShoppingGearWebb/chair/img/chair05.jpg'
            })">
              <i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ
            </button>
            <button class="item-btn-secondary"><i class="fa-solid fa-cart-shopping"></i> Mua ngay</button>
          </div>
        </div>
      </section>

      <!-- Product Details Section -->
      <div class="detail-wrapper">
        <div class="item-detail-container">
          <div class="detail-text-container">
            <h2 class="detail-header">Thông tin sản phẩm</h2>
            <h3 class="detail-desc">Mô tả sản phẩm</h3>
            <div class="detail-text">
              <ul>
                <li>Ghế WGC207</li>
                <li>Màu sắc: Red/Black</li>
                <li>Loại ghế: Game</li>
                <li>Chân ghế: Kim loại cao cấp</li>
                <li>Tay ghế: 4D Silicon</li>
                <li>Chất liệu ghế: PU chống xước</li>
                <li>Lưng ghế: Foam lạnh</li>
                <li>Tính năng: Ngả 160°, Xoay 160°</li>
                <li>Bánh xe: Nhựa tiêu âm</li>
                <li>Chứng nhận: ISO9001, GFA, ROHS</li>
                <li>Trọng lượng: 14 kg</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Sản phẩm tương tự -->
        <div class="item-relative-container">
          <h2 class="relative-header">Sản phẩm tương tự</h2>
          <div class="relative-grid">
            <div class="relative-item">
              <img src="/ShoppingGearWebb/chair/img/chair06.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Ghế EGC231</p>
              <p class="relative-price">1.000.000 VND</p>
              <a href="/ShoppingGearWebb/chair/chair06/item6.php">
                <button id="relative-btn" class="item-btn">Xem chi tiết</button>
              </a>
            </div>
            <div class="relative-item">
              <img src="/ShoppingGearWebb/chair/img/chair07.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Ghế TC100</p>
              <p class="relative-price">2.000.000 VND</p>
              <a href="/ShoppingGearWebb/chair/chair07/item7.php">
                <button id="relative-btn" class="item-btn">Xem chi tiết</button>
              </a>
            </div>
            <div class="relative-item">
              <img src="/ShoppingGearWebb/chair/img/chair04.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Ghế Gladiator GB001</p>
              <p class="relative-price">2.000.000 VND</p>
              <a href="/ShoppingGearWebb/chair/chair04/item4.php">
                <button id="relative-btn" class="item-btn">Xem chi tiết</button>
              </a>
            </div>
            <div class="relative-item">
              <img src="/ShoppingGearWebb/chair/img/chair08.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Ghế AKARACING</p>
              <p class="relative-price">3.000.000 VND</p>
              <a href="/ShoppingGearWebb/chair/chair08/item8.php">
                <button id="relative-btn" class="item-btn">Xem chi tiết</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer section -->
    <footer>
      <div class="container">
        <div class="footer-content">
          <div class="footer-column">
            <h3 class="footer-title">Get the best bundle offers</h3>
            <p>Add latest deals right in your inbox!</p>
            <form class="newsletter-form">
              <input
                type="email"
                placeholder="Email"
                class="newsletter-input"
              />
              <button type="submit" class="newsletter-btn">GO</button>
            </form>
          </div>

          <div class="footer-column">
            <h3 class="footer-title">Follow us</h3>
            <p>Stay in touch</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/CellphoneSVietnam" target="_blank" class="fb-icon social-icon">
                <i class="fa-brands fa-facebook"></i>
              </a>
              <a href="https://www.tiktok.com/@cellphones.official" target="_blank" class="social-icon">
                <i class="tiktok-icon fa-brands fa-tiktok"></i>
              </a>
              <a href="https://www.youtube.com/@CellphoneSOfficial" target="_blank" class="social-icon">
                <i class="youtube-icon fa-brands fa-youtube"></i>
              </a>
            </div>
          </div>

          <div class="footer-column">
            <h3 class="footer-title">Company</h3>
            <ul class="footer-links">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blogs</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h3 class="footer-title">Support</h3>
            <ul class="footer-links">
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
          </div>
        </div>

        <div class="copyright">
          <p>© 2025 GameChair Pro | All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <script src="search.js" defer></script>
  </body>
</html>
