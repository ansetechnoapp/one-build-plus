<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq_title extends Model
{
    use HasFactory;
    protected $table = 'faq_title';


    protected $fillable = [
        'title',
    ];
    public function faqs()
    {
        return $this->hasMany(Faq::class, 'title_id');
    }
}
