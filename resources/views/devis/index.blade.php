<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Devis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        h1, h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Devis de Services</h1>

    <h2>Informations du Client:</h2>
    <p>Nom: {{ $nom }}</p>
    <p>Prénom: {{ $prenom }}</p>
    <p>Email: {{ $email }}</p>
    <p>Mot de passe: [Masqué pour des raisons de sécurité]</p>

    <h2>Détail des Services:</h2>
    <table>
        <thead>
            <tr>
                <th>Service</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service }}</td>
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
        <li>Toutes les informations personnelles fournies seront traitées conformément à notre politique de confidentialité.</li>
    </ul>

    <p>Veuillez noter que ce devis est basé sur les informations fournies et est sujet à changement après consultation directe.</p>

    <p>Pour accepter ce devis et commencer la procédure, veuillez nous contacter à [Coordonnées de Contact].</p>
</div>

</body>
</html>
