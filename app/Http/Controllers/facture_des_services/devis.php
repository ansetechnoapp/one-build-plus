<?php

namespace App\Http\Controllers\facture_des_services;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class devis extends Controller
{
    public function genererDevis()
{
    $data = [
        'nom' => 'John',
        'prenom' => 'Doe',
        'email' => 'john.doe@example.com',
        'services' => ['Enregistrement ANDF', 'Frais de formalité', 'Frais notarié'],
        'montantTotal' => '500',
        'dateDevis' => now()->format('d/m/Y'),
        'dateExpiration' => now()->addDays(7)->format('d/m/Y'),
    ];

    $pdf = Pdf::loadView('devis\index', $data);
    return $pdf->stream('devis.pdf');
}
}
