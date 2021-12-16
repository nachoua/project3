<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bd_worker;

class bd_society extends Model
{
    use HasFactory;
    protected $table = 'society';
    protected $guarded = [];
    protected $primaryKey ='id';
    public function worker()
    {
        return $this->belongsTo(bd_worker::class, 'worker_id');
    }
}
