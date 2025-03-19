<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictogram extends Model
{
    use HasFactory;
    protected $table = 'pictograms';
    protected $fillable = ['image_path'];
}