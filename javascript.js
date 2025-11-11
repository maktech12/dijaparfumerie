const toggleButton = document.querySelector('#hamburger-btn');
const navLinks = document.querySelector('.navbar ul');

// 3. On ajoute l'écouteur d'événement au clic
toggleButton.addEventListener('click', () => {
    // La fonction clé: elle ajoute ou retire la classe 'active'
navLinks.classList.toggle('active');
});