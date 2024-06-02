<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Listing extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded =['id'];
    protected $with = ['category','user','comments'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

  

    public function scopeFilter($query,array $filters){
        
        $query->when($filters['search'] ?? false,function($query, $search){
            return $query->where('placename','like','%' . $search.'%')
            ->orWhere('forgender','like','%'.$search.'%')
            ->orWhere('location','like','%'.$search.'%')
            ->orWhere('region','like','%'.$search.'%');
        });
        // $query->when($filters['category'] ?? false,function($query,$category){
        //     return $query->whereHas('category',function($query) use ($category){
        //         $query->where('slug',$category);
        //     });
        // });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'placename'
            ]
        ];
    }
}
