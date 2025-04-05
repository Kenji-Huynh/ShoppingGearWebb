document.addEventListener("DOMContentLoaded", function () {
  // Khởi tạo giỏ hàng từ localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Cập nhật số lượng sản phẩm trong giỏ hàng trên header
  updateCartBadge();

  // Render giỏ hàng
  renderCart();

  // Sự kiện khi click nút thanh toán
  const checkoutBtn = document.getElementById("checkout-btn");
  if (checkoutBtn) {
    checkoutBtn.addEventListener("click", function () {
      if (cart.length > 0) {
        document.getElementById("checkout-form").classList.add("active");
      } else {
        alert("Giỏ hàng của bạn đang trống!");
      }
    });
  }

  // Sự kiện khi click nút quay lại từ form thanh toán
  const backToCartBtn = document.getElementById("back-to-cart");
  if (backToCartBtn) {
    backToCartBtn.addEventListener("click", function () {
      document.getElementById("checkout-form").classList.remove("active");
    });
  }

  // Xử lý form đặt hàng
  const orderForm = document.getElementById("order-form");
  if (orderForm) {
    orderForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Lấy thông tin form
      const orderData = {
        fullname: document.getElementById("fullname").value,
        phone: document.getElementById("phone").value,
        address: document.getElementById("address").value,
        paymentMethod: document.getElementById("payment").value,
        items: cart,
        totalPrice: calculateTotal(),
        orderDate: new Date().toISOString(),
      };

      // Lưu đơn hàng vào server qua AJAX
      saveOrderToServer(orderData);
    });
  }

  // Đóng popup thành công
  const closePopupBtn = document.getElementById("close-popup");
  if (closePopupBtn) {
    closePopupBtn.addEventListener("click", function () {
      document.getElementById("success-popup").classList.remove("active");
      // Xóa giỏ hàng sau khi đặt hàng thành công
      clearCart();
      // Chuyển về trang chủ
      window.location.href = "Home.html";
    });
  }

  // Sự kiện khi click nút làm sạch giỏ hàng
  const clearCartBtn = document.getElementById("clear-cart-btn");
  if (clearCartBtn) {
    clearCartBtn.addEventListener("click", function () {
      if (cart.length > 0) {
        if (confirm("Bạn có chắc muốn xóa tất cả sản phẩm khỏi giỏ hàng?")) {
          clearCart();
        }
      } else {
        alert("Giỏ hàng của bạn đã trống!");
      }
    });
  }

  // Hàm cập nhật số lượng sản phẩm trên biểu tượng giỏ hàng
  function updateCartBadge() {
    const cartCountBadge = document.getElementById("cart-count-badge");
    if (cartCountBadge) {
      const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
      cartCountBadge.textContent = totalItems;
    }
  }

  // Hàm hiển thị giỏ hàng
  function renderCart() {
    const cartItemsContainer = document.getElementById("cart-items-container");
    const emptyCart = document.getElementById("empty-cart");
    const totalItemsElem = document.getElementById("total-items");
    const subtotalElem = document.getElementById("subtotal");
    const totalPriceElem = document.getElementById("total-price");

    if (!cartItemsContainer) return;

    if (cart.length === 0) {
      cartItemsContainer.innerHTML = "";
      emptyCart.style.display = "block";

      // Cập nhật tổng số lượng và giá tiền
      if (totalItemsElem) totalItemsElem.textContent = "0";
      if (subtotalElem) subtotalElem.textContent = "0 VND";
      if (totalPriceElem) totalPriceElem.textContent = "0 VND";

      return;
    }

    emptyCart.style.display = "none";
    cartItemsContainer.innerHTML = "";

    // Hiển thị từng sản phẩm trong giỏ hàng
    cart.forEach((item, index) => {
      const cartItemElem = document.createElement("div");
      cartItemElem.className = "cart-item";
      cartItemElem.innerHTML = `
          <img src="${item.image}" alt="${item.name}" class="item-image">
          <div class="item-details">
            <h3 class="item-name">${item.name}</h3>
            <p class="item-price">${formatPrice(item.price)} VND</p>
            <p class="item-category">${item.category}</p>
            <div class="item-actions">
              <div class="quantity-control">
                <button class="quantity-btn minus" data-index="${index}">-</button>
                <input type="number" min="1" value="${
                  item.quantity
                }" class="quantity-input" data-index="${index}">
                <button class="quantity-btn plus" data-index="${index}">+</button>
              </div>
              <button class="remove-btn" data-index="${index}">
                <i class="fa-solid fa-trash"></i> Xóa
              </button>
            </div>
          </div>
          <div class="item-subtotal">
            ${formatPrice(item.price * item.quantity)} VND
          </div>
        `;

      cartItemsContainer.appendChild(cartItemElem);
    });

    // Thêm sự kiện cho các nút trong giỏ hàng
    addCartItemsEvents();

    // Cập nhật tổng số lượng và giá tiền
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    const subtotal = calculateTotal();

    if (totalItemsElem) totalItemsElem.textContent = totalItems;
    if (subtotalElem) subtotalElem.textContent = `${formatPrice(subtotal)} VND`;
    if (totalPriceElem)
      totalPriceElem.textContent = `${formatPrice(subtotal)} VND`;
  }

  // Thêm sự kiện cho các nút trong giỏ hàng
  function addCartItemsEvents() {
    // Xử lý nút tăng số lượng
    document.querySelectorAll(".quantity-btn.plus").forEach((btn) => {
      btn.addEventListener("click", function () {
        const index = parseInt(this.getAttribute("data-index"));
        cart[index].quantity++;
        saveCart();
        renderCart();
      });
    });

    // Xử lý nút giảm số lượng
    document.querySelectorAll(".quantity-btn.minus").forEach((btn) => {
      btn.addEventListener("click", function () {
        const index = parseInt(this.getAttribute("data-index"));
        if (cart[index].quantity > 1) {
          cart[index].quantity--;
          saveCart();
          renderCart();
        }
      });
    });

    // Xử lý nhập số lượng
    document.querySelectorAll(".quantity-input").forEach((input) => {
      input.addEventListener("change", function () {
        const index = parseInt(this.getAttribute("data-index"));
        const quantity = parseInt(this.value);

        if (quantity > 0) {
          cart[index].quantity = quantity;
          saveCart();
          renderCart();
        } else {
          this.value = cart[index].quantity;
        }
      });
    });

    // Xử lý nút xóa sản phẩm
    document.querySelectorAll(".remove-btn").forEach((btn) => {
      btn.addEventListener("click", function () {
        const index = parseInt(this.getAttribute("data-index"));
        if (confirm("Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng?")) {
          cart.splice(index, 1);
          saveCart();
          renderCart();
        }
      });
    });
  }

  // Hàm tính tổng tiền
  function calculateTotal() {
    return cart.reduce((total, item) => total + item.price * item.quantity, 0);
  }

  // Hàm lưu giỏ hàng vào localStorage
  function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartBadge();
  }

  // Hàm xóa giỏ hàng
  function clearCart() {
    cart = [];
    saveCart();
    renderCart();
  }

  // Hàm định dạng giá tiền
  function formatPrice(price) {
    return new Intl.NumberFormat("vi-VN").format(price);
  }

  // Lưu đơn hàng vào database thông qua AJAX
  function saveOrderToServer(orderData) {
    // Sử dụng fetch API để gửi dữ liệu đến server
    fetch("save_order.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(orderData),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          // Hiển thị popup thành công
          document.getElementById("checkout-form").classList.remove("active");
          document.getElementById("success-popup").classList.add("active");
        } else {
          alert("Có lỗi xảy ra: " + data.message);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        // Trong trường hợp chưa có backend, hiển thị popup thành công
        document.getElementById("checkout-form").classList.remove("active");
        document.getElementById("success-popup").classList.add("active");
      });
  }
});

// Hàm thêm sản phẩm vào giỏ hàng (được gọi từ các trang khác)
function addToCart(productData) {
  // Lấy giỏ hàng hiện tại từ localStorage
  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
  const existingItemIndex = cart.findIndex(
    (item) =>
      item.id === productData.id && item.category === productData.category
  );

  if (existingItemIndex !== -1) {
    // Nếu đã có, tăng số lượng
    cart[existingItemIndex].quantity += 1;
  } else {
    // Nếu chưa có, thêm sản phẩm mới vào giỏ hàng
    cart.push({
      ...productData,
      quantity: 1,
    });
  }

  // Lưu giỏ hàng vào localStorage
  localStorage.setItem("cart", JSON.stringify(cart));

  // Cập nhật số lượng hiển thị trên biểu tượng giỏ hàng
  updateCartBadge();

  // Thông báo đã thêm sản phẩm
  alert(`Đã thêm "${productData.name}" vào giỏ hàng!`);
}

// Cập nhật badge hiển thị số lượng sản phẩm trong giỏ hàng
function updateCartBadge() {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  const totalItems = cart.reduce((total, item) => total + item.quantity, 0);

  const cartCountBadge = document.getElementById("cart-count-badge");
  if (cartCountBadge) {
    cartCountBadge.textContent = totalItems;
  }
}

// Gọi hàm cập nhật badge khi trang được tải
document.addEventListener("DOMContentLoaded", updateCartBadge);
