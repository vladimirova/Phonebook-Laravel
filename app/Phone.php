<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Phone
 * @package App
 */
class Phone extends Model {

    /**
     * @var array
     */
	protected $fillable = [
        'contact_id',
        'phone_number'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}
