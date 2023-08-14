<form action="{{route('save.prod')}}" method="POST">
    @csrf
    <div class="mb-3">     


        <label class="small mb-1" for="inputaddress">Entrer les détaille sur la  localisation de la propiété</label>
        <input class="form-control" id="inputaddress" type="text" placeholder="entrer l'addresse de la propiété" name="address">
    </div>
    <div class="row gx-3">
        <div class="mb-3 col-md-6">
            <label class="small mb-1" for="inputland_owner">Entrer le nom complet</label>
            <input class="form-control" id="inputland_owner" type="text" placeholder="Enter your first name" value="xora Valerie" name="land_owner">
        </div>
        <div class="mb-3 col-md-6">
            <labeL class="small mb-1" for="inputarea">Supéficie</labeL>
            <input class="form-control" id="inputarea" type="text" placeholder="Supéficie" value="1ha" name="area">
        </div>
    </div>
    <div class="row gx-3">
        <div class="mb-3 col-md-6">
            <label class="small mb-1" for="departement">Département</label>
            <select class="form-control" id="departement" name="department" onchange="afficherCommunes()">
                <!-- Option par défaut -->
                <option value="" disabled selected>Sélectionnez un département</option>
        
                <!-- Liste des départements -->
                <option value="Alibori">Département de l'Alibori</option>
                <option value="Atacora">Département de l'Atacora</option>
                <option value="Atlantique">Département de l'Atlantique</option>
                <option value="Borgou">Département du Borgou</option>
                <option value="Collines">Département des Collines</option>
                <option value="Couffo">Département du Couffo</option>
                <option value="Donga">Département de la Donga</option>
                <option value="Littoral">Département du Littoral</option>
                <option value="Mono">Département du Mono</option>
                <option value="Ouémé">Département de l'Ouémé</option>
                <option value="Plateau">Département du Plateau</option>
                <option value="Zou">Département du Zou</option>
            </select>
        </div>
        <div class="mb-3 col-md-6">
            <label class="small mb-1" for="communes">Commune</label>
            <select class="form-control" id="communes" name="communes">
                <option value="">Sélectionnez un département</option>
            </select>
        </div>
        
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="inputdescription">Desription</label>
        <input class="form-control" id="inputdescription" type="text" placeholder="Desription" value="Desription" name="description">
    </div>
    <div class="row gx-3">
        <div class="col-md-6 mb-md-0">
            <label class="small mb-1" for="inputprice">prix</label>
            <input class="form-control" id="inputprice" type="number" placeholder="prix" name="price">
        </div>
        <div class="col-md-6 mb-0">
            <label class="small mb-1" for="inputprice_min">prix min</label>
            <input class="form-control" id="inputprice_min" type="number"placeholder="price min" name="price_min">
        </div>
    </div>
    
    <div class="row gx-3">
        <div class="mb-3 col-md-6">
            <label class="small mb-1" for="inputborough">Arrondissement</label>
            <input class="form-control" id="inputborough" type="text" placeholder="Arrondissement" name="borough">
        </div>
        <div class="mb-3 col-md-6">
            <labeL class="small mb-1" for="inputground_type">Type de terre</labeL>
            <select class="form-control" id="inputground_type" name="ground_type">
                <option>choix</option>
            </select>
        </div>
    </div>
    <div class="mb-3 col-md-6">
        <label class="small mb-1" for="inputimage">Entrer une image</label>
        <input class="form-control" id="inputimage" type="file"  name="image">
    </div>
    <hr class="my-4">
    <div class="d-flex justify-content-between">
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>
<script>
    const communesParDepartement = {
            "Alibori": ["Banikoara", "Gogounou", "Kandi", "Karimama", "Malanville", "Ségbana"],
            "Atacora": ["Boukoumbé", "Cobly", "Kérou", "Kouandé", "Matéri", "Natitingou", "Pehonko", "Tanguiéta", "Toucountouna"],
            "Atlantique": ["Abomey-Calavi", "Allada", "Kpomassè", "Ouidah", "Sô-Ava", "Toffo", "Tori-Bossito", "Zè"],
            "Borgou": ["Bembéréké", "Kalalé", "N'Dali", "Nikki", "Parakou", "Pèrèrè", "Sinendé", "Tchaourou"],
            "Collines": ["Bantè", "Dassa-Zoumè", "Glazoué", "Ouèssè", "Savalou", "Savè"],
            "Couffo": ["Aplahoué", "Djakotomey", "Dogbo-Tota", "Klouékanmè", "Lalo", "Toviklin"],
            "Donga": ["Bassila", "Copargo", "Djougou", "Ouaké"],
            "Littoral": ["Cotonou", "Godomey", "Sèmè-Kpodji"],
            "Mono": ["Athiémé", "Bopa", "Comé", "Grand-Popo", "Houéyogbé"],
            "Ouémé": ["Adjarra", "Adjohoun", "Aguégués", "Akpro-Missérété", "Avrankou", "Bonou", "Dangbo", "Porto-Novo", "Sèmè-Podji", "Zangnanado"],
            "Plateau": ["Ifangni", "Kétou", "Pobè", "Sakété"],
            "Zou": ["Abomey", "Agbangnizoun", "Bohicon", "Covè", "Djidja", "Ouinhi", "Za-Kpota"]
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