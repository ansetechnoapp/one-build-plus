<?php

namespace App\Models;

use App\Models\Prod;
use App\Models\User;
use App\Models\Devis\Create;
use App\Models\Devis\Select;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devis extends Model
{
    use HasFactory,Create,Select;
    protected $table = 'devis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'montant',
        'dateDevis',
        'dateExpiration',
        'prod_id',
        'additional_option_id',
        'users_id',
    ];
    public function user()
    {
        return $this->belongsTo(user::class, 'users_id');
    }
    public function additional_option()
    {
        return $this->belongsTo(user::class, 'additional_option_id');
    }
    public function prod()
    {
        return $this->belongsTo(prod::class, 'prod_id');
    }
    public function fedapay()
    {
        return $this->hasOne(fedapay::class, 'devis_id');
    }
    public function createDevis($request, $user, $additional_option)
    {
        $devis = new devis();
        $devis->price = $request->price;
        $devis->montant = $request->montant;
        $devis->prod_id = $request->id;
        $devis->dateDevis = now()->format('Y-m-d');
        $devis->dateExpiration = now()->addDays(7)->format('Y-m-d');
        $devis->user()->associate($user);
        $devis->additional_option()->associate($additional_option);
        $devis->save();
        return $devis;
    }
}