<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business_sub_category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'business_sub_categories';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_sub', 'business_category_id'];

    
}
