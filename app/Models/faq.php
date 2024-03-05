<?php

namespace App\Models;

use App\Models\Faq\Create;
use App\Models\Faq\Delete;
use App\Models\Faq\Select;
use App\Models\Faq\Update;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory,Select,Create,Update,Delete;
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