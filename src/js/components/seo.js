const btn = document.getElementById('seo-btn');

if (btn) {
  const hiddenEls = [];

  let el = btn.parentElement.nextElementSibling;
  while (el) {
    hiddenEls.push(el);
    el.classList.add('disable');
    el = el.nextElementSibling;
  }

  let opened = false;

  btn.addEventListener('click', () => {
    opened = !opened;
    hiddenEls.forEach(el => {
      el.classList.toggle('disable', !opened);
    });

    // опционально — менять текст кнопки
    btn.textContent = opened ? 'Скрыть' : 'Читать далее...';
  });
}
