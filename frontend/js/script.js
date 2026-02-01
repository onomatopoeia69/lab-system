// Toggle the visibility of a dropdown menu
const toggleDropdown = (dropdown, menu, isOpen) => {
  dropdown.classList.toggle("open", isOpen);
  menu.style.height = isOpen ? `${menu.scrollHeight}px` : 0;
};
// Close all open dropdowns
const closeAllDropdowns = () => {
  document.querySelectorAll(".dropdown-container.open").forEach((openDropdown) => {
    toggleDropdown(openDropdown, openDropdown.querySelector(".dropdown-menu"), false);
  });
};
// Attach click event to all dropdown toggles
document.querySelectorAll(".dropdown-toggle").forEach((dropdownToggle) => {
  dropdownToggle.addEventListener("click", (e) => {
    e.preventDefault();
    const dropdown = dropdownToggle.closest(".dropdown-container");
    const menu = dropdown.querySelector(".dropdown-menu");
    const isOpen = dropdown.classList.contains("open");
    closeAllDropdowns(); // Close all open dropdowns
    toggleDropdown(dropdown, menu, !isOpen); // Toggle current dropdown visibility
  });
});
// Attach click event to sidebar toggle buttons
document.querySelectorAll(".sidebar-toggler, .sidebar-menu-button").forEach((button) => {
  button.addEventListener("click", () => {
    closeAllDropdowns(); // Close all open dropdowns
    document.querySelector(".sidebar").classList.toggle("collapsed"); // Toggle collapsed class on sidebar
  });
});
// Collapse sidebar by default on small screens
if (window.innerWidth <= 1024) document.querySelector(".sidebar").classList.add("collapsed");

const showPanel = (panelId) => {
  document.querySelectorAll(".panel").forEach(p => {
    p.classList.remove("active");
  });
  document.getElementById(panelId).classList.add("active");
};

/* Sidebar navigation bindings */
document.querySelectorAll(".nav-link").forEach(link => {
  link.addEventListener("click", (e) => {
    const text = link.textContent.trim();

    if (text.includes("Dashboard") || text.includes("Laboratories")) {
      showPanel("panel-labs");
    }
    if (text.includes("Inventory")) {
      showPanel("panel-inventory");
    }
    if (text.includes("Schedule")) {
      showPanel("panel-schedule");
    }
    if (text.includes("Reports")) {
      showPanel("panel-reports");
    }
  });
});
