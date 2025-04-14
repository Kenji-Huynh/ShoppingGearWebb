<?php
// filepath: d:\ShoppingGearWebb\chair\chair03\item3.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ghế Cougar Armor | GameChair Pro</title>
    <link rel="stylesheet" href="item3.css" />
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
          <h1 class="item-name">Ghế Cougar Armor</h1>
          <div class="item-rating">
            <span class="item-rate">3.2</span>
            <i class="item-icon fa-solid fa-star"></i>
          </div>
          <div class="item-price-container">
            <p class="item-price">2.000.000 VND <span class="item-price-dis">2.500.000 VND</span></p>
            <span class="discount-badge">-20%</span>
          </div>
          <div class="item-actions">
            <button class="item-btn" onclick="addToCart({
              id: 'chair03',
              name: 'Ghế Cougar Armor',
              price: 2000000,
              category: 'Chair',
              image: '/ShoppingGearWebb/chair/img/chair03.jpg'
            })">
              <i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ
            </button>
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
              <p>Ghế Cougar Armor là lựa chọn tuyệt vời cho game thủ:</p>
              <ul>
                <li>Thiết kế công thái học, ôm sát cơ thể</li>
                <li>Phần tựa lưng và đầu có thể điều chỉnh</li>
                <li>Tay vịn 3D giúp tay không bị mỏi khi chơi game lâu</li>
                <li>Khung thép chắc chắn, chịu được trọng lượng lớn</li>
                <li>Chất liệu da PU dễ lau chùi</li>
                <li>Bộ điều chỉnh độ cao gas an toàn</li>
                <li>Bánh xe nylon chịu lực tốt</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Sản phẩm tương tự -->
        <div class="item-relative-container">
          <h2 class="relative-header">Sản phẩm tương tự</h2>
          <div class="relative-grid">
            <div class="relative-item">
              <img src="/ShoppingGearWebb/chair/img/chair01.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Ghế WGC225</p>
              <p class="relative-price">1.000.000 VND</p>
              <a href="/ShoppingGearWebb/chair/chair01/item1.php">
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
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="footer-content">
          <!-- Footer content -->
        </div>
        <div class="copyright">
          <p>© 2025 GameChair Pro | All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <script src="/ShoppingGearWebb/search.js" defer></script>
    <script src="/ShoppingGearWebb/cart.js"></script>
  </body>
</html>
