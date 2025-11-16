// 1. Récupérer les éléments
const modal = document.getElementById("popupAffiche");
const btnOuvrire = document.getElementById("ouvrirePopup");
const btnFermer = document.getElementById("fermerPopup");

// 2. Fonction pour ouvrir la modale
btnOuvrire.onclick = function () {
    modal.style.display = "block";
}

// 3. Fonction pour fermer la modale (via le bouton 'Fermer')
btnFermer.onclick = function() {
    modal.style.display = "none";
}

// 4. Fermer la modale si l'utilisateur clique en dehors
window.onclick = function(even) {
    if(even.target === modal) {
       modal.style.display = "none"; 
    }
}   