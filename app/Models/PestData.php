<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PestData extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function commonData()
    {
        return $this->belongsTo(CommonData::class);
    }

}
