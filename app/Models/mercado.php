<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mercado extends Model
{
    use HasFactory;
    protected $table = "mercado";

    protected $fillable = ["id", "id_nft", "valor", "fecha_public"];

    public $timestamps = false;
}
