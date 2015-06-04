<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 * @package App
 */
class Group extends Model {

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function contacts()
    {
        return $this->belongsToMany('App\Contact');
    }
}
