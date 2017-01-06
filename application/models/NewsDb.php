<?php defined('BASEPATH') OR exit('No direct script access allowed');

use illuminate\Database\Eloquent\Model;

class NewsDb extends Model
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
    protected $table = 'idx_news';

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
    protected $fillable = ['author_id', 'heading', 'contents'];

    /**
     * Tags relation for a news article.
     *
     * @return mixed
     */
    public function tags()
    {
        return $this->belongsToMany('Tags', 'pivot_news_tags', 'tags_id', 'article_id');
    }
}
