<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairStatus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}

