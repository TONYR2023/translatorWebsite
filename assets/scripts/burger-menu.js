document.addEventListener('DOMContentLoaded', () => {
    const burgerIcon = document.getElementById('burger-icon');
    const burgerMenu = document.getElementById('burger-menu');

    // Toggle du menu au click
    burgerIcon.addEventListener('click', () => {
        burgerMenu.classList.toggle('active'); // Ajoute/enlève la classe `active`
        burgerIcon.classList.toggle('active'); // Animation de l'icône
    });
    // Ferme le menu quand on click en dehors
    document.addEventListener('click', (e) => {
        // verifie si le click est en dehors du menu et de l"icone
        if (!burgerMenu.contains(e.target) && !burgerIcon.contains(e.target)) {
            burgerMenu.classList.remove('active'); // Masquer menu
            burgerIcon.classList.remove('active'); // Reinitialise le menu burger
        }
    });
});
