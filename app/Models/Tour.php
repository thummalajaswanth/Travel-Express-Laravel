<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $primaryKey = 't_id';
    protected $fillable = ['name', 'description', 'image', 'price', 'places_covered'];
}
