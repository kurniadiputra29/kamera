<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'id','name', 'created_at', 'updated_at'
    ];
    public function item()
    {
      return $this->hasMany(Items::class);
    }
}
