const toggleButton = document.querySelector('#hamburger-btn');
const navLinks = document.querySelector('.navbar ul');

// 3. On ajoute l'écouteur d'événement au clic
toggleButton.addEventListener('click', () => {
    // La fonction clé: elle ajoute ou retire la classe 'active'
navLinks.classList.toggle('active');
});


// Panier code commence ici........................................................

document.getElementById("compte-btn").addEventListener("click", function() {
    document.querySelector(".fond").style.display = "flex";
})
document.getElementById("compte-btn").addEventListener("click", function() {
    document.querySelector(".popupContenu").style.display = "flex";
})

document.getElementById("popup-exit").addEventListener("click", function () {
    document.querySelector(".popupContenu").style.display = "none";
})

document.getElementById("popup-exit").addEventListener("click", function () {
    document.querySelector(".fond").style.display = "none";
})


/////
document.getElementById("inscrire-btn").addEventListener("click", function() {
    document.querySelector(".inscrire-fond").style.display = "flex";
    document.querySelector(".popupContenu").style.display = "none";
})
document.getElementById("inscrire-btn").addEventListener("click", function() {
    document.querySelector(".inscrire-popup").style.display = "flex";
    document.querySelector(".fond").style.display = "none";
})

document.getElementById("inscrire-popup-exit").addEventListener("click", function () {
    document.querySelector(".inscrire-fond").style.display = "none";
})

document.getElementById("inscrire-popup-exit").addEventListener("click", function () {
    document.querySelector(".inscrire-popup").style.display = "none";
})