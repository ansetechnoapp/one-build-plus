@if (isset($allprodupdate))
    <form action="{{ route('updade.prod') }}" method="POST" enctype="multipart/form-data" onsubmit="return checkPrices()">
        @csrf
        <div class="mb-3">

            <input type="hidden" value="{{ $allprodupdate->id }}" name="prod_id">
            <label class="small mb-1" for="inputaddress">Entrer les détaille sur la localisation de la propiété</label>
            <input class="form-control" id="inputaddress" type="text"value="{{ $allprodupdate->address }}"
                name="address" required>
            @if ($errors->has('address'))
                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
            @endif
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputlandOwner_propertyName">Nom,prénom du propriétaire ou le nom de la propriété</label>
                <input class="form-control" id="inputlandOwner_propertyName" type="text" value="{{ $allprodupdate->landOwner_propertyName }}"
                    placeholder="xora Valerie" name="landOwner_propertyName" required>
                @if ($errors->has('landOwner_propertyName'))
                    <div class="alert alert-danger">{{ $errors->first('landOwner_propertyName') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <labeL class="small mb-1" for="inputarea">Supéficie</labeL>
                <input class="form-control" id="inputarea" type="text" value="{{ $allprodupdate->area }}"
                    placeholder="1ha" name="area" required>
                @if ($errors->has('area'))
                    <div class="alert alert-danger">{{ $errors->first('area') }}</div>
                @endif
            </div>
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="departement">Département</label>
                <select class="form-control" id="departement" name="department" onchange="afficherCommunes()" required>
                    <!-- Option par défaut -->
                    <option value="{{ $allprodupdate->department }}"selected>{{ $allprodupdate->department }}</option>

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
                @if ($errors->has('department'))
                    <div class="alert alert-danger">{{ $errors->first('department') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="communes">Commune</label>
                <select class="form-control" id="communes" name="communes" required>
                    <option value="{{ $allprodupdate->communes }}"selected>{{ $allprodupdate->communes }}</option>
                </select>
                @if ($errors->has('communes'))
                    <div class="alert alert-danger">{{ $errors->first('communes') }}</div>
                @endif
            </div>

        </div>
        <div class="row gx-3">
            <div class="col-md-6 mb-md-0">
                <label class="small mb-1" for="inputprice">prix</label>
                <input class="form-control" id="inputprice" type="text" value="{{ $allprodupdate->price }}"
                    name="price" required>
                     <div class="alert alert-danger" style="display: none;">Le prix minimum doit être inférieur au prix</div>
                @if ($errors->has('price'))
                    <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                @endif
            </div>
            <div class="col-md-6 mb-0">
                <label class="small mb-1" for="inputprice_min">Dernier prix</label>
                <input class="form-control" id="inputprice_min" type="text" value="{{ $allprodupdate->price_min }}"
                    name="price_min" required>
                     <div class="alert alert-danger" style="display: none;">Le prix minimum doit être inférieur au prix</div>
                @if ($errors->has('price_min'))
                    <div class="alert alert-danger">{{ $errors->first('price_min') }}</div>
                @endif
            </div>
        </div>

        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputborough">Arrondissement</label>
                <input class="form-control" id="inputborough" type="text" value="{{ $allprodupdate->borough }}"
                    name="borough" required>
                @if ($errors->has('borough'))
                    <div class="alert alert-danger">{{ $errors->first('borough') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <labeL class="small mb-1" for="inputground_type">Type de terre</labeL>
                <select class="form-control" id="inputground_type" name="ground_type" required>
                    <option value="{{ $allprodupdate->ground_type }}"selected>{{ $allprodupdate->ground_type }}
                    </option>
                    <option value="Domaine habitable">Domaine habitable</option>
                    <option value="Domaine semi-habitable">Domaine semi-habitable</option>
                    <option value="Domaine agricole sans plantation">Domaine agricole sans plantation</option>
                    <option value="Domaine agricole avec plantation">Domaine agricole avec plantation</option>
                </select>
                @if ($errors->has('ground_type'))
                    <div class="alert alert-danger">{{ $errors->first('ground_type') }}</div>
                @endif
            </div>
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputborough">Statut du produit</label>
                <select class="form-control" name="status" id="">
                    <option value="{{ $allprodupdate->status }}"selected>{{ $allprodupdate->status }}
                    </option>
                    <option value="disponible">Disponible</option>
                    <option value="vendu">Vendu</option>
                </select>
                @if ($errors->has('status'))
                    <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                @endif
            </div>
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Entrer une l'image principale</label>
                <input type="file" name="main_image" required>
                @if ($errors->has('main_image'))
                    <div class="alert alert-danger">{{ $errors->first('main_image') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img1" required>
                @if ($errors->has('img1'))
                    <div class="alert alert-danger">{{ $errors->first('img1') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img2">
                @if ($errors->has('img2'))
                    <div class="alert alert-danger">{{ $errors->first('img2') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img3">
                @if ($errors->has('img3'))
                    <div class="alert alert-danger">{{ $errors->first('img3') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img4">
                @if ($errors->has('img4'))
                    <div class="alert alert-danger">{{ $errors->first('img4') }}</div>
                @endif
            </div>
        </div>


        <div class="mb-3">
            <label class="small mb-1" for="inputdescription">Desription</label>
            <textarea class="form-control" id="inputdescription"
                placeholder="mettre tous les informations supplémentaire concernant le produit" name="description" required
                cols="10" rows="10">{{ $allprodupdate->description }}</textarea>
            @if ($errors->has('description'))
                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
            @endif
        </div>
        <hr class="my-4">
        <div class="d-flex justify-content-between">
            <button class="btn btn-primary" type="submit" id="submitBtn">Valider</button>
        </div>
    </form>
@else
    <form action="{{ route('save.prod') }}" method="POST" enctype="multipart/form-data" onsubmit="return checkPrices()">
        @csrf
        <div class="mb-3">


            <label class="small mb-1" for="inputaddress">Entrer les détaille sur la localisation de la
                propiété</label>
            <input class="form-control" id="inputaddress" type="text"
                placeholder="entrer l'addresse de la propiété" name="address" required>
            @if ($errors->has('address'))
                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
            @endif
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputlandOwner_propertyName">Nom,prénom du propriétaire ou le nom de la propriété</label>
                <input class="form-control" id="inputlandOwner_propertyName" type="text" placeholder="Enter your first name"
                    value="xora Valerie" name="landOwner_propertyName" required>
                @if ($errors->has('landOwner_propertyName'))
                    <div class="alert alert-danger">{{ $errors->first('landOwner_propertyName') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <labeL class="small mb-1" for="inputarea">Supéficie</labeL>
                <input class="form-control" id="inputarea" type="text" placeholder="Supéficie" value="1ha"
                    name="area" required>
                @if ($errors->has('area'))
                    <div class="alert alert-danger">{{ $errors->first('area') }}</div>
                @endif
            </div>
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="departement">Département</label>
                <select class="form-control" id="departement" name="department" onchange="afficherCommunes()"
                    required>
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
                @if ($errors->has('department'))
                    <div class="alert alert-danger">{{ $errors->first('department') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="communes">Commune</label>
                <select class="form-control" id="communes" name="communes" required>
                    <option value="">Sélectionnez un département avant la communes</option>
                </select>
                @if ($errors->has('communes'))
                    <div class="alert alert-danger">{{ $errors->first('communes') }}</div>
                @endif
            </div>

        </div>
        <div class="row gx-3">
            <div class="col-md-6 mb-md-0">
                <label class="small mb-1" for="inputprice">prix</label>
                <input class="form-control" id="inputprice" type="text" placeholder="prix" name="price"
                    required>
                     <div class="alert alert-danger" style="display: none;">Le prix minimum doit être inférieur au prix</div>
                @if ($errors->has('price'))
                    <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                @endif
            </div>
            <div class="col-md-6 mb-0">
                <label class="small mb-1" for="inputprice_min">Dernier prix</label>
                <input class="form-control" id="inputprice_min" type="text"placeholder="price min"
                    name="price_min" required>
                     <div class="alert alert-danger" style="display: none;">Le prix minimum doit être inférieur au prix</div>
                @if ($errors->has('price_min'))
                    <div class="alert alert-danger">{{ $errors->first('price_min') }}</div>
                @endif
            </div>
        </div>

        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputborough">Arrondissement</label>
                <input class="form-control" id="inputborough" type="text" placeholder="Arrondissement"
                    name="borough" required>
                @if ($errors->has('borough'))
                    <div class="alert alert-danger">{{ $errors->first('borough') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <labeL class="small mb-1" for="inputground_type">Type de terre</labeL>
                <select class="form-control" id="inputground_type" name="ground_type" required>
                    <option>sélectionnez un type de terrain</option>
                    <option value="Domaine habitable">Domaine habitable</option>
                    <option value="Domaine semi-habitable">Domaine semi-habitable</option>
                    <option value="Domaine agricole sans plantation">Domaine agricole sans plantation</option>
                    <option value="Domaine agricole avec plantation">Domaine agricole avec plantation</option>
                </select>
                @if ($errors->has('ground_type'))
                    <div class="alert alert-danger">{{ $errors->first('ground_type') }}</div>
                @endif
            </div>
        </div>

        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputborough">Statut du produit</label>
                <select class="form-control" name="status" id="">
                    <option> choix</option>
                    <option value="disponible">Disponible</option>
                    <option value="vendu">Vendu</option>
                </select>
                @if ($errors->has('status'))
                    <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                @endif
            </div>
        </div>
        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Entrer une l'image principale</label>
                <input type="file" name="main_image" required>
                @if ($errors->has('main_image'))
                    <div class="alert alert-danger">{{ $errors->first('main_image') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img1" required>
                @if ($errors->has('img1'))
                    <div class="alert alert-danger">{{ $errors->first('img1') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img2">
                @if ($errors->has('img2'))
                    <div class="alert alert-danger">{{ $errors->first('img2') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img3">
                @if ($errors->has('img3'))
                    <div class="alert alert-danger">{{ $errors->first('img3') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputimage">Inserer une image</label>
                <input type="file" name="img4">
                @if ($errors->has('img4'))
                    <div class="alert alert-danger">{{ $errors->first('img4') }}</div>
                @endif
            </div>
        </div>


        <div class="mb-3">
            <label class="small mb-1" for="inputdescription">Desription</label>
            <textarea class="form-control" id="inputdescription"
                placeholder="mettre tous les informations supplémentaire concernant le produit" name="description" required
                cols="10" rows="10"></textarea>
            @if ($errors->has('description'))
                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
            @endif
        </div>
        <hr class="my-4">
        <div class="d-flex justify-content-between">
            <button class="btn btn-primary" type="submit" id="submitBtn">Valider</button>
        </div>
    </form>
@endif




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
