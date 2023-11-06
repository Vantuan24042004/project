<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "id";
    //protected $primaryKey = "id"; // neu la id thi ko can viet lai
    protected $fillable =  //danh  sach cac cot duoc fill du lieu vao
        [
            "name",
            "slug",
        ];

    public function scopeSearch($query,$request){
        if($request->has("search")&& $request->get("search") != ""){
            $search = $request->get("search");
            $query->where("name","like","%$search%")
                ->orWhere("slug","like","%$search%");
        }
        return $query;
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }


}
