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
        $additional_option->product_id = $request->id;
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
            'product_id' => $prod_id,
            'users_id' => $request->user_id,
        ]);
    }
}

trait SelectA_optn
{

    public function findAdditional_option($prod_id,$user_id)
    {
        // $cacheKey = 'first_adp_' . $prod_id . '_' . $user_id;

        // return Cache::remember($cacheKey, $minutes, function () use ($prod_id, $user_id) {
            return Additional_option::where('product_id', $prod_id)->where('users_id', $user_id)->first();
        // });
    }
}

class Additional_option extends Model
{
    use HasFactory,CreateA_optn,SelectA_optn;

    protected $table = 'additional_options';

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
        'product_id',
    ];

    public function devis()
    {
        return $this->hasMany(Devis::class, 'additional_option_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function prod()
    {
        return $this->belongsTo(Prod::class, 'product_id');
    }
    /* public function devis()
    {
        return $this->hasOne(devis::class, 'additional_option_id');
    } */
}

