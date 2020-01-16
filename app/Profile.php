<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $guarded = [];
	
	public function def_profileImage()
	{
		$image_path = ($this->image) ? $this->image : 'profile/hKci7Op6TuseNxWgbxFEDBbAfMr5INDjqlUKSsTZ.jpeg';
		
		return '/storage/'. $image_path;
	}
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
