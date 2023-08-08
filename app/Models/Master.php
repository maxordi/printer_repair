<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'contact_details', 'specialty', 'experience', 'img'];

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}
