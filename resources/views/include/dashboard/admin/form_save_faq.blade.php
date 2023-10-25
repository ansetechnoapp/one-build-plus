@if (isset($allprodupdate))
    <form action="{{ route('updade.prod') }}" method="POST" enctype="multipart/form-data">
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
                <label class="small mb-1" for="inputtitle">Entrer le nom complet</label>
                <input class="form-control" id="inputtitle" type="text" value="{{ $allprodupdate->title }}"
                    value="xora Valerie" name="title" required>
                @if ($errors->has('title'))
                    <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif
            </div>
            <div class="mb-3 col-md-6">
                <labeL class="small mb-1" for="inputarea">Supéficie</labeL>
                <input class="form-control" id="inputarea" type="text" value="{{ $allprodupdate->area }}"
                    value="1ha" name="area" required>
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
                <input class="form-control" id="inputprice" type="number" value="{{ $allprodupdate->price }}"
                    name="price" required>
                @if ($errors->has('price'))
                    <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                @endif
            </div>
            <div class="col-md-6 mb-0">
                <label class="small mb-1" for="inputprice_min">prix min</label>
                <input class="form-control" id="inputprice_min" type="number" value="{{ $allprodupdate->price_min }}"
                    name="price_min" required>
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
                    <option value="Domaine agricole">Domaine agricole</option>
                    <option value="Domaine habitable">Domaine habitable</option>
                    <option value="Domaine semi-habitable">Domaine semi-habitable</option>
                    <option value="Domaine agricole">Domaine agricole</option>
                    <option value="centre ville">centre ville</option>
                    <option value="agglomérations">agglomérations</option>
                    <option value="terres rurales">terres rurales</option>
                    <option value="urbain">urbain</option>
                    <option value="péri-urbain">péri-urbain</option>
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
            <button class="btn btn-primary" type="submit">Valider</button>
        </div>
    </form>
@else
    @if ($listTitleFaq->isEmpty())
        <div class="row gx-3">
            <p>veuillez inserer un titre <a class="nav-link" href="{{route('faq_title_form')}}">FORMULAIRE TITRE FAQ</a></p>
        </div>
        @else
        <form action="{{ route('save_form_faq') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row gx-3">
                <div class="mb-3 col-md-6">
                    <label class="small mb-1" for="inputtitle">Titre</label>
                    <select class="form-control" id="inputtitle" name="title_id" required>

                        @foreach ($listTitleFaq as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <labeL class="small mb-1" for="inputquestion">Question</labeL>
                    <input class="form-control" id="inputquestion" type="text" placeholder="Entrer votre question"
                        name="question" required>
                    @if ($errors->has('question'))
                        <div class="alert alert-danger">{{ $errors->first('question') }}</div>
                    @endif
                </div>
            </div>


            <div class="mb-3">
                <label class="small mb-1" for="inputanswer">Réponse</label>
                <textarea class="form-control" id="inputanswer" placeholder="La réponse de la question" name="answer" required
                    cols="10" rows="10"></textarea>
                @if ($errors->has('answer'))
                    <div class="alert alert-danger">{{ $errors->first('answer') }}</div>
                @endif
            </div>
            <hr class="my-4">
            <div class="d-flex justify-content-between">
                <button class="btn btn-primary" type="submit">Valider</button>
            </div>
        </form>
        @endif
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
