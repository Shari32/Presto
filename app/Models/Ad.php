<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable=

    [   
        'title',
        'description',
        'image',
        'price',
        'category_id',
        'user_id'
    ];

    public function category( ) { 
        return $this->belongsTo(Category::class);
    }

    public function user( ) { 
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Ad::where('is_accepted', null)->count();
    }

}
