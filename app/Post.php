<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Post extends Model {

    /**
     * {@inheritdoc}
     */
    protected $fillable = ['title', 'slug', 'body'];

    /**
     * {@inheritdoc}
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function($post)
        {
            /** @var $post Post */
            $post->setAttribute('slug', Str::slug($post->getAttribute('title')));
        });
    }

    /**
     * Belongs to user
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
