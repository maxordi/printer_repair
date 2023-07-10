<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrinterModel extends Model
{
    use HasFactory;
    protected $fillable = ['printer_brand_id', 'name'];

    public function printerBrand()
    {
        return $this->belongsTo(PrinterBrand::class, 'printer_brand_id');
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
