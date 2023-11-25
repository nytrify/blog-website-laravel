<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Sluggable;  

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // $fillable = hanya variable2 ini yg bisa di mass assign, sisanya gk boleh
    // berlaku untuk mass assignment database kyk create, update, dll
    // protected $fillable = ['title', 'excerpt', 'body'];

    // $guarded = variable2 ini gak boleh di mass assign, sisanya boleh
    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters){

        // if(isset($filters["searchPost"]) ? $filters["searchPost"] : false){
        //     return $query->where("title", "like", "%" . filters["searchPost"] . '%')
        //     ->orWhere("body", "like", "%" .filters["searchPost"] . "%");
        // }

        $query->when($filters["searchPost"] ?? false, function($query, $searchPost){
            return $query->where("title", "like", "%" . $searchPost . '%')
            ->orWhere("body", "like", "%" . $searchPost . "%");
        });

        // $query->when($filters['search'] ?? false, function($query, $search) {
        //     return $query->where(function($query) use ($search) {
        //          $query->where('title', 'like', '%' . $search . '%')
        //                      ->orWhere('body', 'like', '%' . $search . '%');
        //      });
        //  });

        $query->when($filters["category"] ?? false, function($query, $category){
            return $query->whereHas("category",function($query) use ($category){
                $query->where("slug", $category);
            });
        });

        $query->when($filters["author"] ?? false, function($query, $author){
            return $query->whereHas("author",function($query) use ($author){
                $query->where("username", $author);
            });
        });
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
