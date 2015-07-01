<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'map';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['bis_id', 'date', 'latitude', 'longitude'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public function bis() {
        return $this->belongsTo('App\Bis');
    }
}
