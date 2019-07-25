<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notes;

class Notes extends Model
{
    protected $table = 'notes';
    protected $guarded = array('id');

    public function getData(){
        return $this ->id . ':' . $this->notes ;
    }
}
