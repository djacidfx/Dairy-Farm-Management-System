<?php

namespace App\Models;

use App\Models\Bull;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Breed extends Model
{
    use HasFactory;

    public function bull()
    {
        return $this->hasMany(Bull::class);
    }
}
