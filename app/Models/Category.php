<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];


    //=======Relationship==============//
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'Category_id', 'id');
    }
}
