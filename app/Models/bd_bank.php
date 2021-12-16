<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bd_human;


class bd_bank extends Model
{
    use HasFactory;
    protected $table = 'bank';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function human()
    {
        return $this->belongsTo(bd_human::class, 'human_id');
    }
}
