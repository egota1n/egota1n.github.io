// ПЕРЕКЛЮЧЕНИЕ МЕНЮ

// Получаем все ссылки с классом .header__categories-type
const links = document.querySelectorAll('.header__categories-type');

// Получаем элемент, содержимое которого мы будем изменять
const catalogName = document.querySelector('.section__catalog-name');

// Добавляем обработчик события для каждой ссылки
links.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Предотвращаем переход по ссылке

        // Получаем текст из ссылки и устанавливаем его в элемент .section__catalog-name
        catalogName.textContent = this.textContent;
    });
});

// Добавляем обработчик события для каждой ссылки
links.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault(); // Предотвращаем переход по ссылке

        // Убираем класс active у всех ссылок
        links.forEach(otherLink => {
            otherLink.classList.remove('active');
        });

        // Добавляем класс active только к выбранной ссылке
        this.classList.add('active');
    });
});



// ФИЛЬТРЫ 

const section__catalog_size_btn = document.querySelector('.section__catalog-size-btn');
const section__catalog_sort_btn = document.querySelector('.section__catalog-sort-btn');

const section__catalog_size = document.querySelector('.section__catalog-size');
const section__catalog_sort = document.querySelector('.section__catalog-sort');

section__catalog_size_btn.addEventListener('click', function(e) {
    e.preventDefault(); // Предотвращаем переход по ссылке

    section__catalog_size.classList.toggle('active');
});

section__catalog_sort_btn.addEventListener('click', function(e) {
    e.preventDefault(); // Предотвращаем переход по ссылке

    section__catalog_sort.classList.toggle('active');
});



// МОДАЛЬНЫЕ ОКНА

// Получаем все элементы, для открытия модальных окон
const btn__open_account = document.querySelector('.header__management-account');
const btn__open_account2 = document.querySelector('.modal__registration .modal-form-description a');
const btn__open_registration = document.querySelector('.modal__account .modal-form-description a');

// Получаем модальные окна
const modal__account = document.querySelector('.modal__account');
const modal__registration = document.querySelector('.modal__registration');

// Получаем кнопки закрытия
const btn__close_account = document.querySelector('.modal__account .modal-close');
const btn__close_registration = document.querySelector('.modal__registration .modal-close');

// Получаем body
const body = document.querySelector('body');

// Открытие модального окна с входом
btn__open_account.addEventListener('click', function(e) {
    e.preventDefault(); // Предотвращаем переход по ссылке

    modal__account.classList.toggle('active');
    body.classList.toggle('modal');
});

// Открытие модального окна с регистрацией из входа
btn__open_registration.addEventListener('click', function(e) {
    e.preventDefault(); // Предотвращаем переход по ссылке

    modal__account.classList.toggle('active');
    modal__registration.classList.toggle('active');
});

// Открытие модального окна с входом из регистрации
btn__open_account2.addEventListener('click', function(e) {
    e.preventDefault(); // Предотвращаем переход по ссылке

    modal__registration.classList.toggle('active');
    modal__account.classList.toggle('active');
});

// Закрытие модального окна с входом
btn__close_account.addEventListener('click', function(e) {
    modal__account.classList.toggle('active');
    body.classList.toggle('modal');
});

// Закрытие модального окна с регистрацией
btn__close_registration.addEventListener('click', function(e) {
    modal__registration.classList.toggle('active');
    body.classList.toggle('modal');
});
  


// ВЫВОД ТОВАРОВ В КАТАЛОГ

document.addEventListener('DOMContentLoaded', function () {
    const catalogElement = document.getElementById('catalog');

    // Функция для загрузки данных из data.json
    function loadData() {
        fetch('https://egota1n.github.io/DressImpress/data.json')
            .then((response) => response.json())
            .then((data) => {
                // Генерируем карточки товаров из данных
                data.forEach((item) => {
                    const card = document.createElement('div');
                    card.classList.add('section__catalog-card');
                    
                    const img = document.createElement('img');
                    img.classList.add('section__catalog-card-img');
                    img.src = item.image;

                    const title = document.createElement('h3');
                    title.classList.add('section__catalog-card-title');
                    title.textContent = item.title;

                    const price = document.createElement('p');
                    price.classList.add('section__catalog-card-price');
                    price.textContent = item.price;

                    card.appendChild(img);
                    card.appendChild(title);
                    card.appendChild(price);

                    catalogElement.appendChild(card);
                });
            })
            .catch((error) => {
                console.error('Ошибка загрузки данных:', error);
            });
    }

    // Вызываем функцию загрузки данных
    loadData();
});