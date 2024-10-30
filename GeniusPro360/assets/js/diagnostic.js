document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.diagnostic-form');

    form.addEventListener('submit', (e) => {
        e.preventDefault();  // Empêche l'envoi du formulaire
        const pcNumber = document.getElementById('pc-number').value;
        const problemDescription = document.querySelector('.form__input').value;

        // Validation du numéro de PC
        const pcNumberRegex = /^\d{1,10}$/; // exemple : entre 1 et 10 chiffres
        if (!pcNumberRegex.test(pcNumber)) {
            alert('Le numéro de PC doit contenir entre 1 et 10 chiffres.');
            return;
        }

        if (!problemDescription) {
            alert('Veuillez décrire votre problème.');
            return;
        }

        // Ajouter le diagnostic à l'historique
        diagnostics.push({ pcNumber, problemDescription });
        updateHistory();

        alert(`Diagnostic démarré pour le PC numéro : ${pcNumber}\nProblème: ${problemDescription}`);
        // Vous pouvez ajouter ici le code pour envoyer le numéro de PC au serveur ou commencer le diagnostic
    });

    // Événement pour le bouton d'annulation
    document.getElementById('cancel').addEventListener('click', () => {
        document.getElementById('pc-number').value = ''; // Réinitialise le champ de saisie
        document.querySelector('.form__input').value = ''; // Réinitialise le champ de description du problème
    });

    // Initialisation de l'historique des diagnostics
    let diagnostics = [];

    function updateHistory() {
        const historyList = document.getElementById('diagnosticHistory');
        historyList.innerHTML = ''; // Vider la liste avant de mettre à jour

        diagnostics.forEach((diag, index) => {
            const li = document.createElement('li');
            li.textContent = `Diagnostic ${index + 1}: PC ${diag.pcNumber} - ${diag.problemDescription}`;
            historyList.appendChild(li);
        });
    }
});
