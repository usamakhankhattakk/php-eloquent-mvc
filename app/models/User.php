<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'user';

    public $name;
    public $timestamps = [];
    protected $fillable = ['username', 'email'];
}
