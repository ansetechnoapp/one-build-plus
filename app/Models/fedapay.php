<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


trait CreateFedap
{
    
    public function fedapayValidatePay($users_id,$fedapaytransactionId,$url,$devis_id)
    {
        if (!$this->IdfedapayExists($devis_id,$users_id)) {
            $pay = new Fedapay();
            $pay->fedapayTransactionId = $fedapaytransactionId;
            $pay->fedapayTransactionUrl = $url;
            $pay->devis()->associate($devis_id);
            $pay->user()->associate($users_id);
            $pay->save();

            return $pay;
        } else {

            $pay = $this->delete_devis($devis_id);
            $pay = new Fedapay();
            $pay->fedapayTransactionId = $fedapaytransactionId;
            $pay->fedapayTransactionUrl = $url;
            $pay->devis()->associate($devis_id);
            $pay->user()->associate($users_id);
            $pay->save();

            return $pay;
        }
    }
}

trait DeleteFedap
{

    public function delete_devis($devis_id)
    {
        return Fedapay::where('devis_id', $devis_id)->delete();
    }
}

trait SelectFedap
{

    private function IdfedapayExists($id,$users_id)
    {
        return Fedapay::where('devis_id', $id)->where('users_id', $users_id)->exists();
    }
}

trait UpdateFedap
{

    public function UpdateStatutFedapay($request,$status)
    {
        return Fedapay::where('fedapayTransactionId', $request->id)->update(['statut' => $status]);
    }
}

class Fedapay extends Model
{
    use HasFactory,CreateFedap,DeleteFedap,SelectFedap,UpdateFedap;
    protected $table = 'fedapay';


    protected $fillable = [
        'fedapayTransactionId',
        'fedapayTransactionUrl',
        'devis_id',
        'users_id',
    ];
    public function devis()
    {
        return $this->belongsTo(Devis::class, 'devis_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
