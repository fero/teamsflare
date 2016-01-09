<?php

namespace App;

use Illuminate\Database\Eloquent;

class Project extends \Eloquent
{
    protected $fillable = ["name", "description", "body"];

    public function realAuthor() {
        if ($this->author == 'company') {
            return $this->belongsTo('App\Company', 'author_id', 'id');
        }

        return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
