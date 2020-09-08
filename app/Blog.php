<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table ="blogs";

    // untuk menentukan kolom mana yang boleh diisi
    protected $fillable = ['judul','isi','penulis'];
}
