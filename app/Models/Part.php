<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $table = 'parts';

    protected $fillable = ['name', 'app_id'];

    public function app(){
        return $this->belongsTo(App::class);
    }

    public function subPart(){
        return $this->hasMany(SubPart::class, 'part_id');
    }
}
