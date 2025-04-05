document.addEventListener("DOMContentLoaded", function () {
  // Lấy tham chiếu đến select và products grid
  const sortSelect = document.getElementById("sort-select");
  const productsGrid = document.querySelector(".products-grid");

  // Hàm lấy giá từ một phần tử sản phẩm
  function getPrice(productElement) {
    // Lấy chuỗi giá (vd: "1.000.000 VND")
    const priceText =
      productElement.querySelector(".product-price").textContent;
    // Loại bỏ dấu chấm và chuyển đổi thành số
    return parseInt(priceText.replace(/\./g, "").replace(" VND", ""), 10);
  }

  // Hàm sắp xếp sản phẩm
  function sortProducts(sortOption) {
    // Lấy tất cả các sản phẩm và chuyển thành mảng
    const products = Array.from(productsGrid.querySelectorAll(".product-card"));

    // Sắp xếp mảng sản phẩm theo giá
    products.sort((a, b) => {
      const priceA = getPrice(a);
      const priceB = getPrice(b);

      if (sortOption === "low-to-high") {
        return priceA - priceB; // Từ thấp đến cao
      } else {
        return priceB - priceA; // Từ cao đến thấp
      }
    });

    // Xóa các sản phẩm hiện tại
    productsGrid.innerHTML = "";

    // Thêm các sản phẩm đã sắp xếp vào grid
    products.forEach((product) => {
      productsGrid.appendChild(product);
    });
  }

  // Lắng nghe sự kiện thay đổi trên select
  sortSelect.addEventListener("change", function () {
    sortProducts(this.value);
  });

  // Sắp xếp sản phẩm theo tùy chọn mặc định khi trang được tải
  sortProducts(sortSelect.value);
});
