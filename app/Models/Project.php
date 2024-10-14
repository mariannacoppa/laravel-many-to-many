<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'summary', 'image', 'type_id'];
    public static function generateSlug($title){
        return Str::slug($title, '-');
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
