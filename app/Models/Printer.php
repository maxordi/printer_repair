<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;

    protected $fillable = ['printer_brand_id', 'printer_model_id'];

    public function printerBrand()
    {
        return $this->belongsTo(PrinterBrand::class, 'printer_brand_id');
    }

    public function printerModel()
    {
        return $this->belongsTo(PrinterModel::class, 'printer_model_id');
    }

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}
