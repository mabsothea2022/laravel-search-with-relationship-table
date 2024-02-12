<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_categorys';
    protected $fillable=[
        'name'
    ];

    public function tbl_categorys(){
        return $this->hasMany(PostModel::class,'category_id','id');
    }
}
