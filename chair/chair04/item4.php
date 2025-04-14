<?php
// filepath: d:\ShoppingGearWebb\chair\chair04\item4.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ghế Gladiator GB001 | GameChair Pro</title>
    <link rel="stylesheet" href="item4.css" />
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
          <h1 class="item-name">Ghế Gladiator GB001</h1>
          <div class="item-rating">
            <span class="item-rate">4.9</span>
            <i class="item-icon fa-solid fa-star"></i>
          </div>
          <div class="item-price-container">
            <p class="item-price">2.000.000 VND <span class="item-price-dis">2.600.000 VND</span></p>
            <span class="discount-badge">-20%</span>
          </div>
          <div class="item-actions">
            <button class="item-btn" onclick="addToCart({
              id: 'chair04',
              name: 'Ghế Gladiator GB001',
              price: 2000000,
              category: 'Chair',
              image: '/ShoppingGearWebb/chair/img/chair04.jpg'
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
              <p>Ghế Gaming Gladiator GB001 với thiết kế hiện đại và tính năng cao cấp:</p>
              <ul>
                <li>Thiết kế hiện đại, màu sắc nổi bật</li>
                <li>Chất liệu da PU cao cấp, độ bền cao</li>
                <li>Tay vịn 4D điều chỉnh linh hoạt theo nhiều chiều</li>
                <li>Ngả lưng 180 độ, có thể nằm hoàn toàn</li>
                <li>Gối đầu và gối lưng memory foam êm ái</li>
                <li>Khung kim loại chắc chắn</li>
                <li>Bánh xe PU di chuyển êm trên mọi bề mặt</li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Sản phẩm tương tự -->
        <div class="item-relative-container">
          <h2 class="relative-header">Sản phẩm tương tự</h2>
          <div class="relative-grid">
            <div class="relative-item">
              <img src="/ShoppingGearWebb/chair/img/chair02.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Ghế WGC203</p>
              <p class="relative-price">2.000.000 VND</p>
              <a href="/ShoppingGearWebb/chair/chair02/item2.php">
                <button id="relative-btn" class="item-btn">Xem chi tiết</button>
              </a>
            </div>
            <div class="relative-item">
              <img src="/ShoppingGearWebb/chair/img/chair03.jpg" alt="item" class="relative-img" />
              <p class="relative-name">Ghế Cougar Armor</p>
              <p class="relative-price">2.000.000 VND</p>
              <a href="/ShoppingGearWebb/chair/chair03/item3.php">
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
