<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'schulde';
    protected $primaryKey = 'id';
    public function channel(){
         $this->hasOne('app\Program', 'programId');
    }
    public function descriptions(){
         $this->hasOne('app\Channel', 'channelId');

    }
}
