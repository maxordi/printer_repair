<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    protected $fillable = ['brand','model','serial_number'];
    use HasFactory;
}
