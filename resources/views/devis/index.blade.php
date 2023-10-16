<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Devis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 83%;
            
        }

        .body {
            margin: 0;
            /* max-width: 900px; */
            padding: 20px;
            /* border: 1px solid #ccc; */
            background-color: #ffffff;
            
        }



        .entete {
            color: #fff;
            /* Couleur du texte */
            width: 100%;
            padding: 2px;
            display: contents;
            /* Marge intérieure autour de l'en-tête */
        }

        .logo-left img {
            max-height: 20px;
            /* Hauteur maximale des logos (ajustez selon vos besoins) */
        }

        .header-text p {

            color: black;
            text-align: center;
            /* Centrer le texte horizontalement */
        }

        .line {
            border: 2px solid black;
        }

        .flexEntete_devis {
            display: flex;
        }

        h1,
        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="body">
        <header>
            <div class="entete">
                <div class="logo-left">
                    <img src="assets/images/logo-dark.png" alt="Logo gauche">
                </div>
                <div class="header-text">
                    <p>SOCIETE ONE BUILD PLUS OBP</p>
                </div>
            </div>
            <div class="header-text">
                <p>Cotonou (Bénin), Direction Générale à Akpakpa Sodjèatinmè, Immeuble vert en face de la station Bénin
                    Pétro, N° <br>
                    RCCM RB/COT/23 B 35222; IFU n* 3202378122260, E.mail: onebuildplus@gmail.com Tel: +229 98 27 27 16
                    /69 68 47 05(Appel et WhatsApp).</p>
            </div>
        </header>
        <div class="line"></div>
        <section>
            <div class="container">
                <h1>Devis de Services</h1>
                <div class="flexEntete_devis">
                    <div>
                        <h2>Informations du Client:</h2>
                        <p>Nom: {{ $nom }}</p>
                        <p>Prénom: {{ $prenom }}</p>
                        <p>Email: {{ $email }}</p>

                    </div>
                    <div></div>

                </div>
                <h2>Détail des Services:</h2>
                <table border="1">
                    <thead>
                        <tr>
                            <th>ID Produit</th>
                            <th>Montant Produit</th>
                            <th>Fréquence de paiement</th>
                            <th>Enrégistrement ANDF</th>
                            <th>Frais de formalité</th>
                            <th>Frais notaire</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>1</td>
                                <td>100</td>
                                <td>Mensuel</td>
                                <td>{{ $service }}</td>
                                <td>30</td>
                                <td>40</td>
                                <td>{{ $montantTotal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h2>Montant Total: {{ $montantTotal }}</h2>

                <p>Date du Devis: {{ $dateDevis }}</p>
                <p>Date d'Expiration: {{ $dateExpiration }}</p>

                <h2>Conditions Générales:</h2>
                <ul>
                    <li>Les frais mentionnés ci-dessus couvrent les services indiqués.</li>
                    <li>Le montant total doit être payé en totalité avant la prestation des services.</li>
                    <li>Toutes les informations personnelles fournies seront traitées conformément à notre politique de
                        confidentialité.</li>
                </ul>

                <p>Veuillez noter que ce devis est basé sur les informations fournies et est sujet à changement après
                    consultation directe.</p>

                <p>Pour accepter ce devis et commencer la procédure, veuillez nous contacter à [Coordonnées de Contact].
                </p>
            </div>
        </section>

        <div class="line"></div>
        <footer>
            <div class="header-text">
                <p>Nous vous Garantissons la Sécurité de vos Biens Immobiliers et Educatifs.
                    N° RCCM RB/COT/23 B 35222; IFU n* 3202378122260 Tel: +229 98 27 27 16 /69 68 47 05 (Appel et WhatsApp). </p>
            </div>
    </footer>

</body>

</html>
