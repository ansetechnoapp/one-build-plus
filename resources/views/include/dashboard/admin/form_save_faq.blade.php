@if (isset($allprodupdate))
    <form action="{{ route('admin.Updatesavefaqs') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row gx-3">
            <div class="mb-3 col-md-6">
                <label class="small mb-1" for="inputtitle">Catégories</label>
                <select class="form-control" id="inputtitle" name="title_id" required>

                    <option value="{{ $currenttitle->id }}">{{ $currenttitle->title }}</option>
                    @foreach ($listTitleFaq as $item)
                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach

                </select>
            </div>
            <div class="mb-3 col-md-6">
                <labeL class="small mb-1" for="inputquestion">Question</labeL>
                <input class="form-control" id="inputquestion" type="text" value="{{ $allprodupdate->question }}"
                    name="question" required>
                    <input type="hidden" value="{{ $allprodupdate->id }}"
                    name="id">
                @if ($errors->has('question'))
                    <div class="alert alert-danger">{{ $errors->first('question') }}</div>
                @endif
            </div>
        </div>


        <div class="mb-3">
            <label class="small mb-1" for="inputanswer">Réponse</label>
            <textarea class="form-control" id="inputanswer" name="answer" required cols="10" rows="10">{{ $allprodupdate->answer }}</textarea>
            @if ($errors->has('answer'))
                <div class="alert alert-danger">{{ $errors->first('answer') }}</div>
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
            <p>veuillez inserer un titre <a class="nav-link" href="{{ route('admin.faq_title_form') }}">FORMULAIRE TITRE
                    FAQ</a></p>
        </div>
    @else
        <form action="{{ route('admin.save_form_faq') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row gx-3">
                <div class="mb-3 col-md-6">
                    <label class="small mb-1" for="inputtitle">Catégories</label>
                    <select class="form-control" id="inputtitle" name="title_id" required>

                        <option>choisir la catégorie</option>
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
