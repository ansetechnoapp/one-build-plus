<?php

namespace App\Models;

use App\Models\Prod;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait CreateA_optn
{
    
    public function createadditional_option($request, $user)
    {   /* dd(Session::get('payment_frequency')); */
        $additional_option = new Additional_option();
        $additional_option->registration_andf = $request->registration_andf;
        $additional_option->formality_fees = $request->formality_fees;
        $additional_option->notary_fees = $request->notary_fees;
        $additional_option->payment_frequency = Session::get('payment_frequency');
        $additional_option->prod_id = $request->id;
        $additional_option->user()->associate($user);
        $additional_option->save();

        return $additional_option;
    }

    public function createAdditional_option2($request,$prod_id) 
    {
        return Additional_option::create([
            'registration_andf' => $request->registration_andf,
            'formality_fees' => $request->formality_fees,
            'notary_fees' => $request->notary_fees,
            'payment_frequency' => $request->payment_frequency,
            'prod_id' => $prod_id,
            'users_id' => $request->user_id,
        ]);
    }
} 

trait SelectA_optn
{

    public function findAdditional_option($prod_id,$user_id)
    {
        // $minutes = 5; // Cache les données pendant 5 minutes
        // $minutes = 60; // Cache les données pendant 1 heure
        // $minutes = 1440; // Cache les données pendant 24 heures (24 heures * 60 minutes)
        // $minutes = 10080; // Cache les données pendant 7 jours (7 jours * 24 heures * 60 minutes)
        // $minutes = 43200; // Cache les données pendant 30 jours (30 jours * 24 heures * 60 minutes)

        // $cacheKey = 'first_adp_' . $prod_id . '_' . $user_id;

        // return Cache::remember($cacheKey, $minutes, function () use ($prod_id, $user_id) {
            return Additional_option::where('prod_id', $prod_id)->where('users_id', $user_id)->first();
        // });
    }
}

class Additional_option extends Model
{
    use HasFactory,CreateA_optn,SelectA_optn;

    protected $table = 'additional_option';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'registration_andf',
        'formality_fees',
        'notary_fees',
        'payment_frequency',
        'users_id',
        'prod_id',
    ];

    public function devis()
    {
        return $this->hasMany(devis::class, 'additional_option_id');
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'users_id');
    }
    public function prod()
    {
        return $this->belongsTo(Prod::class, 'prod_id');
    }
    /* public function devis()
    {
        return $this->hasOne(devis::class, 'additional_option_id');
    } */
}


