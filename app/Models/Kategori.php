<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function beritas()
    {
        return $this->hasMany(Berita::class);
    }

}
