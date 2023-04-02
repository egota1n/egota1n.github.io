// СКРОЛЛ

// Получаем все ссылки якорей на странице
const anchors = document.querySelectorAll('a[href*="#"]')

// Добавляем обработчик событий клика для каждой ссылки
anchors.forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    // Получаем значение атрибута href ссылки
    const targetId = this.getAttribute('href')

    // Получаем элемент, на который ссылается якорь
    const targetElement = document.querySelector(targetId)

    // Вычисляем высоту шапки сайта
    const headerHeight = document.querySelector('header').offsetHeight

    // Вычисляем позицию элемента, на который ссылается якорь
    const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY

    // Вычисляем конечную позицию скролла, учитывая высоту шапки сайта
    const finalPosition = targetPosition - headerHeight

    // Выполняем плавный скролл до элемента, на который ссылается якорь
    window.scrollTo({
      top: finalPosition,
      behavior: 'smooth'
    })
  })
})

// ПОДЧЕРКИВАНИЕ ССЫЛОК МЕНЮ

// Шаг 1: получение элементов меню
const menuItems = document.querySelectorAll('.header__link');

// Шаг 2: получение блоков, соответствующих пунктам меню
const sections = document.querySelectorAll('section');

// Шаг 3: функция для определения текущего блока
function getCurrentSection() {
  let currentSection = sections[0];
  for (let i = 0; i < sections.length; i++) {
    if (sections[i].getBoundingClientRect().top <= window.innerHeight / 2) {
      currentSection = sections[i];
    } else {
      break;
    }
  }
  return currentSection;
}

// Шаг 4: функция для назначения класса "active" пункту меню
function setActiveMenuItem() {
  const currentSection = getCurrentSection();
  for (let i = 0; i < menuItems.length; i++) {
    const menuItem = menuItems[i];
    const href = menuItem.getAttribute('href');
    const section = document.querySelector(href);
    if (section === currentSection) {
      menuItem.classList.add('active');
    } else {
      menuItem.classList.remove('active');
    }
  }
}

// Шаг 5: назначение обработчика событий на прокрутку страницы
window.addEventListener('scroll', setActiveMenuItem);
