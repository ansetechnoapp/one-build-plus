<script>
    const communesParDepartement = {
        "Alibori": ["Banikoara", "Gogounou", "Kandi", "Karimama", "Malanville", "Ségbana"],
        "Atacora": ["Boukoumbé", "Cobly", "Kérou", "Kouandé", "Matéri", "Natitingou", "Pehonko", "Tanguiéta",
            "Toucountouna"
        ],
        "Atlantique": ["Abomey-Calavi", "Allada", "Kpomassè", "Ouidah", "Sô-Ava", "Toffo", "Tori-Bossito", "Zè"],
        "Borgou": ["Bembéréké", "Kalalé", "N'Dali", "Nikki", "Parakou", "Pèrèrè", "Sinendé", "Tchaourou"],
        "Collines": ["Bantè", "Dassa-Zoumè", "Glazoué", "Ouèssè", "Savalou", "Savè"],
        "Couffo": ["Aplahoué", "Djakotomey", "Dogbo-Tota", "Klouékanmè", "Lalo", "Toviklin"],
        "Donga": ["Bassila", "Copargo", "Djougou", "Ouaké"],
        "Littoral": ["Cotonou", "Godomey", "Sèmè-Kpodji"],
        "Mono": ["Athiémé", "Bopa", "Comé", "Grand-Popo", "Houéyogbé"],
        "Ouémé": ["Adjarra", "Adjohoun", "Aguégués", "Akpro-Missérété", "Avrankou", "Bonou", "Dangbo", "Porto-Novo",
            "Sèmè-Podji", "Zangnanado"
        ],
        "Plateau": ["Ifangni", "Kétou", "Pobè", "Sakété"],
        "Zou": ["Abomey", "Agbangnizoun", "Bohicon", "Covè", "Djidja", "Ouinhi", "Zagnanado", "Za-Kpota",
            "Zogbodomey"
        ]
    };

    function afficherCommunes() {
        const departementSelect = document.getElementById("departement");
        const communesSelect = document.getElementById("communes");
        const departementSelectionne = departementSelect.value;

        // Efface les options actuelles de la liste des communes
        communesSelect.innerHTML = "";

        // Affiche les communes du département sélectionné
        if (departementSelectionne && communesParDepartement.hasOwnProperty(departementSelectionne)) {
            communesParDepartement[departementSelectionne].forEach(commune => {
                const option = document.createElement("option");
                option.text = commune;
                communesSelect.add(option);
            });
        } else {
            const optionDefaut = document.createElement("option");
            optionDefaut.value = "";
            optionDefaut.disabled = true;
            optionDefaut.selected = true;
            optionDefaut.text = "Sélectionnez un département";
            communesSelect.add(optionDefaut);
        }
    }
</script>
<script>
    // Fonction pour vérifier la condition et afficher ou masquer l'alerte
    function checkPrices() {
        var inputPriceMin = document.getElementById('inputprice_min');
        var inputPrice = document.getElementById('inputprice');
        var alertMessage = document.querySelector('.alert-danger');
        var submitButton = document.getElementById('submitBtn');

        // Vérifier si les valeurs sont des nombres
        if (isNaN(parseFloat(inputPriceMin.value)) || isNaN(parseFloat(inputPrice.value))) {
            // Afficher l'alerte si l'une des valeurs n'est pas un nombre
            alertMessage.style.display = 'block';
            submitButton.disabled = true;
            return false; // Empêcher la soumission du formulaire
        }

        // Vérifier la condition
        if (parseFloat(inputPriceMin.value) >= parseFloat(inputPrice.value)) {
            // Afficher l'alerte si la condition n'est pas respectée
            alertMessage.style.display = 'block';
            submitButton.disabled = true;
            return false; // Empêcher la soumission du formulaire
        } else {
            // Masquer l'alerte si la condition est respectée
            alertMessage.style.display = 'none';
            submitButton.disabled = false;
            return true; // Autoriser la soumission du formulaire
        }
    }

    // Attacher un gestionnaire d'événements à l'élément inputprice_min
    document.getElementById('inputprice_min').addEventListener('input', checkPrices);
    document.getElementById('inputprice').addEventListener('input', checkPrices);
</script>
