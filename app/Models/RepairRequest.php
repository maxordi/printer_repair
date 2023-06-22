<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairRequest extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['brand_id', 'model_id', 'client_name', 'phone', 'address', 'issue_description'];

    public function printerBrand()
    {
        return $this->belongsTo(PrinterBrand::class, 'brand_id');
    }

    public function printerModel()
    {
        return $this->belongsTo(PrinterModel::class, 'model_id');
    }

    public function repair()
    {
        return $this->hasOne(Repair::class, 'client_id');
    }

}
