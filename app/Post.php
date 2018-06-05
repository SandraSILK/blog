<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

// class Post extends Model
class Post extends Authenticatable
{
	use HasApiTokens, Notifiable, SoftDeletes;

    protected $fillable = [
    	'title',
    	'text',
    	'file',
    	'slug'
    ];

    protected $dates = ['deleted_at'];
}
