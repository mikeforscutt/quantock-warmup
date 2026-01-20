(() => {
  const btn = document.querySelector(".burger");
  const nav = document.getElementById("mobile-menu");
  const backdrop = document.querySelector(".mobile-menu-backdrop");
  if (!btn || !nav || !backdrop) return;

  const openMenu = () => {
    document.body.classList.add("menu-open");
    btn.setAttribute("aria-expanded", "true");
    nav.setAttribute("aria-hidden", "false");
    backdrop.hidden = false;
  };

  const closeMenu = () => {
    document.body.classList.remove("menu-open");
    btn.setAttribute("aria-expanded", "false");
    nav.setAttribute("aria-hidden", "true");
    backdrop.hidden = true;
  };

  btn.addEventListener("click", () => {
    const isOpen = document.body.classList.contains("menu-open");
    isOpen ? closeMenu() : openMenu();
  });

  backdrop.addEventListener("click", closeMenu);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeMenu();
  });
})();
