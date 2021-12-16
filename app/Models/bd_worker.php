<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bd_society;

class bd_worker extends Model
{
    use HasFactory;
    protected $table = 'worker';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function society()
    {
        return $this->hasMany(bd_society::class, 'id', 'worker_id');
    }
}
