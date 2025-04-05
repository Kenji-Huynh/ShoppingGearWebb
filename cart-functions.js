// Hàm thêm sản phẩm vào giỏ hàng (được gọi từ các trang sản phẩm)
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
