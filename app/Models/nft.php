<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nft extends Model
{
    use HasFactory;
    protected $table = "nfts";

    protected $fillable = ["id_nft", "idMeta", "nombre", "imagen"];

    public $timestamps = false;
}
