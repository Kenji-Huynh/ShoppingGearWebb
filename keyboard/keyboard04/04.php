<?php
// filepath: d:\ShoppingGearWebb\keyboard\keyboard04\04.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bàn phím cơ Rapid Trigger | GameChair Pro</title>
    <link rel="stylesheet" href="04.css" />
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
          <h1 class="item-name">Bàn phím cơ Rapid Trigger</h1>
          <div class="item-rating">
            <span class="item-rate">4.8</span>
            <i class="item-icon fa-solid fa-star"></i>
          </div>
          <div class="item-price-container">
            <p class="item-price">750.000 VND <span class="item-price-dis">1.290.000 VND</span></p>
            <span class="discount-badge">-50%</span>
          </div>
          <div class="item-actions">
            <button class="item-btn" onclick="addToCart({
              id: 'keyboard04',
              name: 'Bàn phím cơ Rapid Trigger',
              price: 750000,
              category: 'Keyboard',
              image: '/ShoppingGearWebb/keyboard/img/key04.jpg'
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
              <p>Bàn phím cơ Rapid Trigger được thiết kế đặc biệt cho game thủ FPS:</p>
              <ul>
                <li>Switch Speed Silver với khoảng cách kích hoạt chỉ 1.2mm</li>
                <li>Độ bền 100 triệu lần nhấn</li>
                <li>Thiết kế TKL nhỏ gọn, tiết kiệm không gian</li>
                <li>Keycap PBT doubleshot chống mài mòn và phai màu</li>
                <li>Tính năng anti-ghosting hoàn hảo</li>
                <li>LED RGB 16.8 triệu màu với nhiều hiệu ứng</li>
                <li>Chế độ cạnh tranh đặc biệt cho game thủ chuyên nghiệp</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Sản phẩm tương tự -->
        <div class="item-relative-container">
          <h2 class="relative-header">Sản phẩm tương tự</h2>
          <div class="relative-grid">
            <div class="relative-item">
              <img src="/ShoppingGearWebb/keyboard/img/key02.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Bàn phím cơ TUF</p>
              <p class="relative-price">650.000 VND</p>
              <a href="/ShoppingGearWebb/keyboard/keyboard02/02.php">
                <button id="relative-btn" class="item-btn">Xem chi tiết</button>
              </a>
            </div>
            <div class="relative-item">
              <img src="/ShoppingGearWebb/keyboard/img/key03.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Bàn phím cơ Astronaut</p>
              <p class="relative-price">1.000.000 VND</p>
              <a href="/ShoppingGearWebb/keyboard/keyboard03/03.php">
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
