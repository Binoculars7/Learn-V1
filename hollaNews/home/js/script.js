// Hamburger Menu Toggle
const sidebar = document.getElementById("sidebar");
const main = document.getElementById("main");
const mainh = document.getElementById("header-main");
const toggleButton = document.getElementById("menu-toggle");

toggleButton.addEventListener("click", () => {
    sidebar.classList.toggle("active");
    main.classList.toggle("active");
});
