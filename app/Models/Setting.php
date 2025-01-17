<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = true;


    public function dataStatis()
    {
        return $this->belongsTo(DataStatis::class);
    }
}
