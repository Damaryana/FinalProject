<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = ['section', 'sub_part_id'];

    public function item(){
        return $this->belongsTo(SubPart::class);
    }
}
