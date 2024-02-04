<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;


    protected $fillable = [
        'categorie_id',
        'name',
        'slug',
        'is_active',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class,'id');
    }
}
