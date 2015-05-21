<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

    protected $fillable = [
        'user_id',
        'email',
        'fname',
        'lname'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Group')->withTimestamps( );
    }
}
