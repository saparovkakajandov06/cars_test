<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    use HasFactory;

    protected $table = 'markas';

    public $fillable = ['name'];
}
