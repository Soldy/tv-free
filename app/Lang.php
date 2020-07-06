<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lang extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'langs';
    protected $primaryKey = 'id';
    public function save(array $options = [])
    {
         if(!isset($this->uuid))
             $this->uuid= Str::uuid();
         parent::save($options);
    }
}
