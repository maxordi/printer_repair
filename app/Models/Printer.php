<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'model_id'];

    public function printerBrand()
    {
        return $this->belongsTo(PrinterBrand::class, 'brand_id');
    }

    public function printerModel()
    {
        return $this->belongsTo(PrinterModel::class, 'model_id');
    }

    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
}