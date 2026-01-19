(function () {
  const btn = document.querySelector('.burger');
  const menu = document.querySelector('#mobile-menu');
  const backdrop = document.querySelector('.mobile-menu-backdrop');

  if (!btn || !menu || !backdrop) return;

  function openMenu() {
    document.documentElement.classList.add('menu-open');
    btn.setAttribute('aria-expanded', 'true');
    menu.setAttribute('aria-hidden', 'false');
    backdrop.hidden = false;
  }

  function closeMenu() {
    document.documentElement.classList.remove('menu-open');
    btn.setAttribute('aria-expanded', 'false');
    menu.setAttribute('aria-hidden', 'true');
    backdrop.hidden = true;
  }

  btn.addEventListener('click', () => {
    const isOpen = document.documentElement.classList.contains('menu-open');
    isOpen ? closeMenu() : openMenu();
  });

  backdrop.addEventListener('click', closeMenu);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeMenu();
  });
})();
