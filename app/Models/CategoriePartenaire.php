<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriePartenaire extends Model
{
    use HasFactory;

    protected $table = 'categorie_partenaires';

    protected $fillable = ['name'];
}
