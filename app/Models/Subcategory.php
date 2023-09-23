<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded=[];


    //==========Relationship ==================//

    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_id', 'id');
    }
}
