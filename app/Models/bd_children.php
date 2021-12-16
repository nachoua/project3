<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bd_parent;

class bd_children extends Model
{
    use HasFactory;
    protected $table = 'children';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public function parent()
    {
        return $this->hasMany(bd_parent::class, 'id', 'children_id');
    }
}
