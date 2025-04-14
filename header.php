<?php
// filepath: d:\ShoppingGearWebb\includes\header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle ?? 'GameChair Pro'; ?></title>
  <link rel="stylesheet" href="/ShoppingGearWebb/index.css" />
  <?php if (isset($additionalCss)) echo $additionalCss; ?>
  <script src="https://kit.fontawesome.com/49e41b5211.js" crossorigin="anonymous"></script>
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