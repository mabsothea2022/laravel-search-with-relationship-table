<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    protected $table='tbl_posts';
    protected $fillable=[
        'name',
        'description',
        'category_id',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    
    public function category(){
        return $this->belongsTo(CategoryModel::class,'category_id','id');
    }
}
