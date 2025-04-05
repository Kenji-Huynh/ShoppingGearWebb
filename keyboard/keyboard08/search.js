document.addEventListener("DOMContentLoaded", function () {
  const searchBtn = document.querySelector(".search-btn-item");
  const navContainer = document.querySelector(".nav-container");
  let searchForm = null;
  let isSearchVisible = false;

  searchBtn.addEventListener("click", function (e) {
    e.preventDefault();

    if (!isSearchVisible) {
      // Tạo form tìm kiếm nếu chưa tồn tại
      if (!searchForm) {
        searchForm = document.createElement("form");
        searchForm.className = "search-form";
        searchForm.innerHTML = `
          <input type="text" class="search-input" placeholder="Search..." autofocus>
          <button type="submit" class="search-submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          <button type="button" class="search-close">
            <i class="fa-solid fa-xmark"></i>
          </button>
        `;

        // Thêm sự kiện đóng form tìm kiếm
        searchForm
          .querySelector(".search-close")
          .addEventListener("click", function () {
            toggleSearchForm();
          });

        // Thêm sự kiện submit form
        searchForm.addEventListener("submit", function (e) {
          e.preventDefault();
          const searchInput = searchForm.querySelector(".search-input").value;
          if (searchInput.trim() !== "") {
            alert("Đang tìm kiếm: " + searchInput);
            // Ở đây bạn có thể thêm logic để xử lý tìm kiếm thực tế
          }
        });

        // Thêm form vào DOM
        navContainer.appendChild(searchForm);
      }

      // Hiển thị form tìm kiếm
      toggleSearchForm();

      // Focus vào input
      setTimeout(() => {
        searchForm.querySelector(".search-input").focus();
      }, 100);
    } else {
      // Ẩn form tìm kiếm
      toggleSearchForm();
    }
  });

  // Hàm chuyển đổi hiển thị/ẩn form tìm kiếm
  function toggleSearchForm() {
    if (!searchForm) return;

    if (!isSearchVisible) {
      searchForm.classList.add("active");
      document.body.classList.add("search-active");
    } else {
      searchForm.classList.remove("active");
      document.body.classList.remove("search-active");
    }

    isSearchVisible = !isSearchVisible;
  }

  // Đóng form khi nhấn ESC
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && isSearchVisible) {
      toggleSearchForm();
    }
  });
});
