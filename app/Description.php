<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Description extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'descriptions';
    protected $primaryKey = 'id';
    public function langs()
    {
        $this->belongsToMany(
            'app\Lang', 
            'description_to_channel_with_lang', 
            'langId', 
            'descriptionId'
        );
    }
}
