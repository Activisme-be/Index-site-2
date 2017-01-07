<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Reaction extends Model
{
    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = [];


    /**
     * Enable / Disable the timestamps
     *
     * @return bool
     */
     public $timestamps = true;

    /**
     *
     */
    pUblic function author()
    {
        return $this->belognsTo();
    }
}
