<?php

namespace App\Models;

use App\Models\Faq_title\Create;
use App\Models\Faq_title\Delete;
use App\Models\Faq_title\Select;
use App\Models\Faq_title\Update;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq_title extends Model
{
    use HasFactory,Create,Select,Update,Delete;
    protected $table = 'faq_title';


    protected $fillable = [
        'title',
    ];
    public function faqs()
    {
        return $this->hasMany(Faq::class, 'title_id');
    }
}
