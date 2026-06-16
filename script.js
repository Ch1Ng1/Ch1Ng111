const menuToggle = document.getElementById("menuToggle");
const menuList = document.getElementById("menuList");

if (menuToggle && menuList) {
  menuToggle.addEventListener("click", () => {
    const isOpen = menuList.classList.toggle("open");
    menuToggle.setAttribute("aria-expanded", String(isOpen));
  });

  menuList.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      menuList.classList.remove("open");
      menuToggle.setAttribute("aria-expanded", "false");
    });
  });
}
