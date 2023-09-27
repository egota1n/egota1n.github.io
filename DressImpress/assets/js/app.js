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
  

document.addEventListener('DOMContentLoaded', function () {
    const catalogElement = document.getElementById('catalog');

    // Функция для загрузки данных из data.json
    function loadData() {
        fetch('./../../data.json')
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