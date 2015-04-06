<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends Model implements SluggableInterface {

    use SluggableTrait;

    /**
     * {@inheritdoc}
     */
    protected $fillable = ['title', 'slug', 'body'];

    /**
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'title',
        'save_to' => 'slug'
    ];

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
