<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\bd_children;

class bd_parent extends Model
{
    use HasFactory;
    protected $table = 'parent';
    protected $guarded = [];

    protected $primaryKey = 'id';
    public function children()
    {
        return $this->belongsTo(bd_children::class, 'children_id');

    }
}
