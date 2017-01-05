<?php defined('BASEPATH') OR exit('No direct script access allowed');

use illuminate\Database\Eloquent\Model;

class NewsDb extends Model
{
    public      $timestamps = true;
    protected   $table      = 'news_items';
    protected   $primaryKey = 'id';
    protected   $fillable   = [];
}
