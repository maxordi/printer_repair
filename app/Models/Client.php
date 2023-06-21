<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['client_name', 'phone', 'address', 'note'];

    public function repair()
    {
        return $this->hasOne(Repair::class, 'client_id');
    }
}
