<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrinterModel extends Model
{
    use HasFactory;
    protected $fillable = ['brand_id', 'model'];

    public function printerBrand()
    {
        return $this->belongsTo(PrinterBrand::class, 'brand_id');
    }

    public function printers()
    {
        return $this->hasMany(Printer::class);
    }

    public function repairRequests()
    {
        return $this->hasMany(RepairRequest::class);
    }
}
