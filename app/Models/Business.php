<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'businesses';

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
    protected $fillable = ['name', 'detail', 'photo', 'host', 'member', 'category', 'sub_category', 'income', 'expenses', 'total_cost','status'];

    
}
