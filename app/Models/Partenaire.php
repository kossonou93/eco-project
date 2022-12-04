<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $table = 'partenaires';

    protected $fillable = ['name', 'email', 'phone', 'photo', 'categorie_id', 'enable', 'titre_fr', 'soustitre_fr', 'message_fr', 'titre_en', 'soustitre_en', 'message_en'];
}
