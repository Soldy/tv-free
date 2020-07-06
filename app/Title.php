<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'titles';
    protected $primaryKey = 'id';
    public function titles()
    {
        $this->belongsToMany(
            'app\Lang', 
            'title_to_channel_with_lang', 
            'langId', 
            'titleId'
        );
    }
}
