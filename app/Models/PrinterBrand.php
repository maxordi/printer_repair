<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrinterBrand extends Model
{
    use HasFactory;
    protected $fillable = ['brand'];

    public function printerModels()
    {
        return $this->hasMany(PrinterModel::class);
    }

    public function printers()
    {
        return $this->hasMany(Printer::class);
    }
}
