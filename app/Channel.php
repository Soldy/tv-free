<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Channel extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'channels';
    protected $primaryKey = 'id';
    public function titles(){
         $this->belongstomany('app\Title', 'title_to_channel_with_lang', 'titleId', 'channelId');
    }
    public function descriptions(){
         $this->belongstomany('app\Description', 'description_to_channel_with_lang', 'descriptionId', 'channelId');
    }
}
