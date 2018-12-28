<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	// Both is workable

    protected $fillable =[
    	'title','description'
    ];

	// Do not use this if you getting variables using request()->all() method:
	 
    // protected $guarded =[];

    public function tasks()
    {
    	return $this->hasMany(Task::class);
    }
}
