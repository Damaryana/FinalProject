<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPart extends Model
{
    use HasFactory;

    protected $table = 'sub_parts';

    protected $fillable = ['name', 'part_id'];

    public function subPart(){
        return $this->belongsTo(Part::class, 'part_id', 'id');
    }

    public function item(){
        return $this->hasMany(Item::class,'sub_part_id');
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($subPart) { 
             $subPart->item()->each(function($item) {
                $item->delete();
             });
        });
    }
}
