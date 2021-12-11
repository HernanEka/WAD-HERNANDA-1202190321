<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    use HasFactory;

    protected $table = 'vaksins';
    public $timestamps = false;

    protected $fillable = [

        'name',
        'price',
        'description',
        'image',

    ];

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}
