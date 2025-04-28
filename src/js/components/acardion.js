document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll(".quest__item");
  items.forEach(el => {
    el.addEventListener('click', e => {
      const self = e.currentTarget;
      const btn = self.querySelector(".quest__btn");
      const text = self.querySelector(".quest__text");
      const title = self.querySelector(".quest__subtitle");
      // Закрываем все остальные элементы
      items.forEach(item => {
        if (item !== self) {
          const otherText = item.querySelector(".quest__text");
          const otherBtn = item.querySelector(".quest__btn");
          const otherTitle = item.querySelector(".quest__subtitle");
          otherText.classList.remove('quest__text--active');
          item.classList.remove('quest__item--active');
          otherBtn.classList.remove('quest__btn--active');
          otherTitle.classList.remove('quest__subtitle--active');
          otherText.style.maxHeight = null;
        }
      });

      // Переключаем состояние текущего элемента
      text.classList.toggle('quest__text--active');
      self.classList.toggle('quest__item--active');
      btn.classList.toggle('quest__btn--active');
      title.classList.toggle('quest__subtitle--active');
      if (text.classList.contains('quest__text--active')) {
        text.style.maxHeight = text.scrollHeight + 'px';
      } else {
        text.style.maxHeight = null;
      }
    });
  });
});







document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('.header__link');
  const currentUrl = window.location.pathname;

  links.forEach(link => {
    if (link.getAttribute('href') === currentUrl) {
      link.classList.add('header__link--accent');
    }
  });
});


document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('.menu__item');
  const currentUrl = window.location.pathname;

  links.forEach(link => {
    if (link.getAttribute('href') === currentUrl) {
      link.classList.add('menu__item--active');
    }
  });
});



if (document.getElementById('copy-email')) {
  document.getElementById('copy-email').addEventListener('click', function (event) {
    event.preventDefault(); // Чтобы ссылка не срабатывала
    var email = "privet-bilet8@yandex.ru"; // Твой e-mail

    navigator.clipboard.writeText(email).then(function () {
      var successMsg = document.getElementById('copy-success');
      successMsg.style.display = 'inline';
      setTimeout(() => successMsg.style.display = 'none', 2000); // Скрываем через 2 секунды
    }).catch(function (err) {
      console.error('Ошибка копирования: ', err);
    });
  });
}




document.addEventListener("DOMContentLoaded", function () {
  const modals = document.querySelectorAll('.graph-modal__label');

  modals.forEach(modal => {
    const radios = modal.querySelectorAll('.graph-modal__radio input[type="radio"]');
    const textarea = modal.querySelector('.graph-modal__address');

    if (!radios.length || !textarea) return;

    function toggleTextarea() {
      const selected = modal.querySelector('.graph-modal__radio input[type="radio"]:checked');
      if (selected && selected.value === "получить скан") {
        textarea.classList.add("disable");
      } else {
        textarea.classList.remove("disable");
      }
    }

    radios.forEach(radio => {
      radio.addEventListener("change", toggleTextarea);
    });

    // Инициализация
    toggleTextarea();
  });
});

