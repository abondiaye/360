document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.diagnostic-form');
    const diagnostics = [];

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const pcNumber = document.getElementById('pc-number').value;
        const problemDescription = document.querySelector('.form__input').value;

        // Validation des champs
        const pcNumberRegex = /^\d{1,10}$/;
        if (!pcNumberRegex.test(pcNumber)) {
            alert('Le numéro de PC doit contenir entre 1 et 10 chiffres.');
            return;
        }
        if (!problemDescription) {
            alert('Veuillez décrire votre problème.');
            return;
        }

        // Ajoute le diagnostic à l'historique local
        diagnostics.push({ pcNumber, problemDescription });
        updateHistory();

        // Requête AJAX pour sauvegarder le diagnostic en base de données
        fetch('/api/diagnostic/save', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ pcNumber, problemDescription })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors de la sauvegarde du diagnostic');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                alert('Diagnostic sauvegardé avec succès en base de données.');
            } else {
                alert('Erreur: ' + (data.error || 'Une erreur est survenue'));
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue. Veuillez réessayer.');
        });
    });

    // Fonction pour mettre à jour l'historique sur la page
    function updateHistory() {
        const historyList = document.getElementById('diagnosticHistory');
        historyList.innerHTML = '';

        diagnostics.forEach((diag, index) => {
            const li = document.createElement('li');
            li.textContent = `Diagnostic ${index + 1}: PC ${diag.pcNumber} - ${diag.problemDescription}`;
            historyList.appendChild(li);
        });
    }

    // Événement pour réinitialiser le formulaire
    document.getElementById('cancel').addEventListener('click', () => {
        document.getElementById('pc-number').value = '';
        document.querySelector('.form__input').value = '';
    });
});
