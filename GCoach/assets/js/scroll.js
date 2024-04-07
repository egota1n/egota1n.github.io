document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();

            const targetId = link.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);

            if (target) {
                const offsetTop = target.getBoundingClientRect().top + window.pageYOffset;

                window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
            }
        });
    });
});