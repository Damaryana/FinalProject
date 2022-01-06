<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $table = 'apps';

    protected $fillable = ['name', 'version'];

    public function part(){
        return $this->hasMany(Part::class, 'app_id');
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($app) { 
             $app->part()->each(function($part) {
                $part->delete();
             });
        });
    }
}
