<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * @package App
 */
class Contact extends Model {


    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'email',
        'fname',
        'lname'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function phones()
    {
        return $this->hasMany('App\Phone');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups()
    {
        return $this->belongsToMany('App\Group')->withTimestamps( );
    }
}
