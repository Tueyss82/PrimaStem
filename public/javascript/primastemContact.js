"use strict";

submitContactButton.onclick = function () {
    let nom = document.getElementById('inputName'); // Récupère le nom
    let prenom = document.getElementById('inputPrenom'); // Récupère le prénom
    let mail = document.getElementById('inputMail'); // Récupère le mail

    if (nom.value === '' || prenom.value === '' || mail.value === '') { // Si nom ou prenom ou mail est vide alors on retourne une alerte qui bloque tout.
        return alert('Veuillez remplir tous les champs vides !');
    }
    else{ // Sinon on retourne une alerte qui indique que le message a bien été envoyé et on est redirigé à l'accueil.
        return alert('Nous avons bien reçu votre message ! Nous vous répondrons dans les plus brefs délais.');  
    }
};