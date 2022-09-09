<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable =

    [    
        'title',
        'description',
        'image',
        'price',
        'category_id',
        'user_id'
    ];

    public function toSearchableArray()
    {
        $category = $this->category;
        $array = [
            'id'=> $this->id,
            'title' => $this->title,
            'category_id'=> $category,
            'user_id' => $this->user_id,
            'price' => $this->price,
            'description'=>$this->description
        ];

        // $array = [
        //     'id'=> $this->id,
        //     'title' => $this->title,
        //     'category_id' => $category,
        //     'user_id' => $this->user_id,
        //     'price' => $this->price
        // ];


        return $array;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)->count();
    }
}
