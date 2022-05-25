<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectMaster extends Model
{
    use HasFactory;
    
    protected $table = 'subject_masters';
    protected $fillable = ['subject_name'];

    public function terms(){
        return $this->hasOne('App\Models\Term','id','term_id');
    }
}
