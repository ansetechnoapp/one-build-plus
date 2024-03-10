<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait CreateFaqT
{
    
    public function createFaq_title($request)
    {
        return faq_title::create([
            'title' => $request->title,
        ]);
    }
}

trait DeleteFaqT
{
    
    public function DeleteFaq_title($col,$id)
    {
        return Faq_title::where($col, $id)->delete();
    }
}

trait SelectFaqT
{
    public function findFaq_title($col,$data)
    {
         return Faq_title::where($col, $data)->first();
    }
}

trait UpdateFaqT
{

    public function UpdateFaqTitle($request)
    {
        $prod = $this->findFaq_title('id',$request->id);
            $prod->update([
                'title' => $request->title,
            ]);
        return $prod;
    }
}

class Faq_title extends Model
{
    use HasFactory,CreateFaqT,DeleteFaqT,SelectFaqT,UpdateFaqT;
    protected $table = 'faq_title';


    protected $fillable = [
        'title',
    ];
    public function faqs()
    {
        return $this->hasMany(Faq::class, 'title_id');
    }
}
