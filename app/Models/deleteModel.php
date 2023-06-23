<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deleteModel extends Model
{
    use HasFactory;
    public $table = 'film_text';
    protected $primaryKey = 'film_id';
}
