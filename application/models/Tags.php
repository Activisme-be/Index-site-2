<?php defined('BASEPATH') OR exit('No direct script access allowed');

use illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /**
     * Enable / Disable the database timestamps.
     *
     * @return bool
     */
    public $timestamps = true;

    /**
     * Define the database table.
     *
     * @return string
     */
    protected $table = 'idx_tags';

    /**
     * Define the primary key.
     *
     * @return string
     */
    protected $primaryKey = 'id';

    /**
     * Database fields for the mass-assign.
     *
     * @return array
     */
    protected $fillable = [];
}
