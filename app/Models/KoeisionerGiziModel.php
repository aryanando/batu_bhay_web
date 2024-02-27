<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoeisionerGiziModel extends Model
{
    use HasFactory;
    protected $table = 'koesioner_gizi';
    protected $fillable = [
        'no_rawat',
        'nama',
        'bgsl',
        'rasa',
        'penampilan',
        'tekstur',
        'variasi',
        'saran',
        'tgl'
    ];



}
