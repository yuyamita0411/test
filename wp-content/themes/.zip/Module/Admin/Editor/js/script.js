window.addEventListener('load', () => {
    document.querySelectorAll('.accordionTitle').forEach((obj) => {
        obj.addEventListener('click', () => {
            obj.classList.toggle('accordionTitleOpen');
            obj.classList.toggle('accordionTitleClose');
            obj.nextElementSibling.classList.toggle('accordionContentOpen');
            obj.nextElementSibling.classList.toggle('accordionContentClose');
        });
    });
});