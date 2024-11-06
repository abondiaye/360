document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.diagnostic-form');
    const diagnostics = [];
    const retourBtn = document.querySelector('.btn-retour');
    const loadingIndicator = document.getElementById('loading-indicator');

    // Charger les diagnostics sauvegardés localement au démarrage
    loadFromLocalStorage();

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

        // Afficher le chargement
        loadingIndicator.style.display = 'block';

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
        })
        .finally(() => {
            loadingIndicator.style.display = 'none'; // Cacher le chargement une fois terminé
        });
    });

    // Animation GSAP sur le bouton Retour au survol
    retourBtn.addEventListener('mouseenter', () => {
        gsap.to(retourBtn, {
            scale: 1.1,
            duration: 0.5,
            ease: "power1.inOut",
            yoyo: true,
            repeat: -1
        });
    });
    retourBtn.addEventListener('mouseleave', () => {
        gsap.to(retourBtn, { scale: 1, duration: 0.5 });
    });

    // Fonction pour mettre à jour l'historique sur la page et localement
    function updateHistory() {
        const historyList = document.getElementById('diagnosticHistory');
        historyList.innerHTML = '';

        diagnostics.forEach((diag, index) => {
            const li = document.createElement('li');
            li.textContent = `Diagnostic ${index + 1}: PC ${diag.pcNumber} - ${diag.problemDescription}`;
            historyList.appendChild(li);
        });
        saveToLocalStorage(); // Sauvegarder l'historique localement après chaque mise à jour
    }

    // Événement pour réinitialiser le formulaire
    document.getElementById('cancel').addEventListener('click', () => {
        document.getElementById('pc-number').value = '';
        document.querySelector('.form__input').value = '';
    });

    function saveToLocalStorage() {
        localStorage.setItem('diagnostics', JSON.stringify(diagnostics));
    }

    function loadFromLocalStorage() {
        const storedDiagnostics = localStorage.getItem('diagnostics');
        if (storedDiagnostics) {
            diagnostics.push(...JSON.parse(storedDiagnostics));
            updateHistory();
        }
    }
});

// Passer à la question suivante
function nextQuestion(step) {
    gsap.to(".question-step", { y: -20, opacity: 0, duration: 0.5, onComplete: () => {
        document.querySelectorAll(".question-step").forEach(el => el.style.display = "none");
        document.getElementById(`step${step}`).style.display = "block";
        gsap.fromTo(`#step${step}`, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5 });
    }});
}

// Afficher le résultat final
function showResult(message) {
    document.getElementById("result-text").innerText = message;
    gsap.to(".question-step", { opacity: 0, duration: 0.5, onComplete: () => {
        document.querySelectorAll(".question-step").forEach(el => el.style.display = "none");
        document.getElementById("result").style.display = "block";
        gsap.to("#result", { opacity: 1, duration: 0.5 });
    }});
}
