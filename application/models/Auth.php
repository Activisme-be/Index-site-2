<?php defined('BASEPATH') OR exit('No direct script access allowed');

use illuminate\Database\Eloquent\Model;

/**
 *
 */
class Auth extends Model
{
    /**
     * Mass-assign fields for the database.
     *
     * @var array
     */
    protected $fillable[''];

    /**
     * Enable or disable the timestamps.
     *
     * @return bool
     */
    protected $timestamps = true;

    /**
     * Belongs top many relationship.
     *
     * @return collection
     */
    public function permissions()
    {
        return $this->belongsToMany();
    }
}
