<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bd_bank;

class bd_human extends Model
{
    use HasFactory;
    protected $table = 'human';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function bank()
    {
        return $this->hasOne(bd_bank::class, 'id', 'human_id');
    }
}
