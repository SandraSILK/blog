<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Laravel\Passport\HasApiTokens;
use Illuminate\Support\HtmlString;

class Post extends Model
// class Post extends Authenticatable
{
	// use HasApiTokens, Notifiable, SoftDeletes;
	use SoftDeletes;

    protected $fillable = [
    	'title',
    	'text',
    	'file',
    	'slug'
    ];

    protected $dates = ['deleted_at'];

    public function getContentAttribute()
    {
    	return new HtmlString($this->text);
    }
}
