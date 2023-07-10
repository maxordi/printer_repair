<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    use HasFactory;

    protected $fillable = ['printer_id', 'client_id', 'master_id', 'description', 'repair_status_id', 'price', 'completion_date'];

    public function printer()
    {
        return $this->belongsTo(Printer::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function master()
    {
        return $this->belongsTo(Master::class);
    }

    public function repairStatus()
    {
        return $this->belongsTo(RepairStatus::class, 'repair_status_id');
    }
}
