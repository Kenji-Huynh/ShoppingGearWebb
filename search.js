document.addEventListener("DOMContentLoaded", function () {
  // Search functionality
  const searchBtn = document.querySelector(".search-btn-item");
  const navContainer = document.querySelector(".nav-container");
  let searchForm = null;
  let isSearchVisible = false;

  createSearchForm();

  searchBtn.addEventListener("click", function (e) {
    e.preventDefault();
    toggleSearchForm();
  });

  function createSearchForm() {
    searchForm = document.createElement("form");
    searchForm.className = "search-form";
    searchForm.innerHTML = `
      <input type="text" class="search-input" placeholder="Search for gaming products..." autofocus>
      <button type="submit" class="search-submit">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
      <button type="button" class="search-close">
        <i class="fa-solid fa-xmark"></i>
      </button>
    `;

    searchForm.querySelector(".search-close").addEventListener("click", function () {
      toggleSearchForm();
    });

    searchForm.addEventListener("submit", function (e) {
      e.preventDefault();
      const searchInput = searchForm.querySelector(".search-input").value;

      if (searchInput.trim() !== "") {
        const submitBtn = searchForm.querySelector(".search-submit");
        const originalContent = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';

        setTimeout(() => {
          performSearch(searchInput);
          submitBtn.innerHTML = originalContent;
        }, 500);
      } else {
        const searchInput = searchForm.querySelector(".search-input");
        searchInput.classList.add("error");
        searchInput.placeholder = "Please enter a search term";

        setTimeout(() => {
          searchInput.classList.remove("error");
          searchInput.placeholder = "Search for gaming products...";
        }, 2000);
      }
    });

    navContainer.appendChild(searchForm);
  }

  function toggleSearchForm() {
    if (!searchForm) return;

    if (!isSearchVisible) {
      searchForm.classList.add("active");
      document.body.classList.add("search-active");
      searchForm.style.animation = "fadeIn 0.3s forwards";
      setTimeout(() => {
        searchForm.querySelector(".search-input").focus();
      }, 100);
    } else {
      searchForm.style.animation = "fadeOut 0.3s forwards";
      setTimeout(() => {
        searchForm.classList.remove("active");
        document.body.classList.remove("search-active");
      }, 280);
    }

    isSearchVisible = !isSearchVisible;
  }

  function performSearch(query) {
    console.log("Searching for:", query);
    alert(`Searching for: ${query}\nResults will appear here in the final implementation.`);
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && isSearchVisible) {
      toggleSearchForm();
    }
  });

  // Tab Switching Functionality
  const tabs = document.querySelectorAll(".tab");
  const tabContents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      // Remove active class from all tabs
      tabs.forEach(t => t.classList.remove("active"));
      // Add active class to clicked tab
      this.classList.add("active");

      // Hide all tab contents
      tabContents.forEach(content => {
        content.style.display = "none";
      });

      // Show the selected tab content
      const tabId = this.getAttribute("data-tab");
      document.getElementById(tabId).style.display = "block";
    });
  });
});