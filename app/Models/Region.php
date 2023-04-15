<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function sea() {
        return $this->belongsTo(Sea::class);
    }
}
