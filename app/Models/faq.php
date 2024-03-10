<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


trait CreateFaq
{
    
    public function createFaq($request)
    {
        return Faq::create([
            'title_id' => $request->title_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
    }
}

trait DeleteFaq
{

    public function DeleteFaq($col,$id)
    {
        return Faq::where($col, $id)->delete();
    }
}

trait SelectFaq
{

    public function selectFaqTitle($title_id)
    {
        return Faq::where('title_id', $title_id)->get();
    }
    public function findFaq($col,$data)
    {
         return Faq::where($col, $data)->first();
    }
    public function getCollectionFaq($col,$data)
    {
         return Faq::where($col, $data)->get();
    }
}

trait UpdateFaq
{

    public function UpdateFaq($request)
    {
        $prod = $this->findFaq('id', $request->id);
        $prod->update([
            'title_id' => $request->title_id,
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return $prod;
    }
}

class Faq extends Model
{
    use HasFactory,CreateFaq,DeleteFaq,SelectFaq,UpdateFaq;
    protected $table = 'faq';


    protected $fillable = [
        'title_id',
        'question',
        'answer',
    ];
    public function faqTitle()
    {
        return $this->belongsTo(Faq_title::class, 'title_id');
    }
}