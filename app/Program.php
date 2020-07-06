<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $table = 'programs';
    protected $primaryKey = 'id';
    public function titles()
    {
         $this->belongstomany(
             'app\Title', 
             'title_to_program_with_lang', 
             'titleId', 
             'programId'
         );
    }
    public function descriptions()
    {
         $this->belongstomany(
             'app\Description', 
             'description_to_program_with_lang',
             'descriptionId', 
            'programId'
         );
    }
    public function thumbnails()
    {
         $this->belongstomany(
             'app\Description', 
             'thumbnails_to_programs',
             'thumbnailId', 
            'programId'
         );
    }
    public function save(array $options = [])
    {
         if(!isset($this->uuid))
             $this->uuid= Str::uuid();
         parent::save($options);
    }
}
