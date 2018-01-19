<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'medias';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'isi'];
    // public $timestamps = false;
}
