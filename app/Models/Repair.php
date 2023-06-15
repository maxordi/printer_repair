<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;
    protected $fillable = ['printer_id', 'user_id', 'master_id', 'repair_date', 'description', 'repair_status', 'cost'];

    public function printer()
    {
        return $this->belongsTo(Printer::class, 'printer_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function master()
    {
        return $this->belongsTo(Master::class, 'master_id');
    }
}
