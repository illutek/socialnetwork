<?php

namespace App;

use App\Presenters\PostPresenter;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Post extends Model
{
    protected $fillable = ['body', 'post_image'];

    public function user(){
        return$this->belongsTo(User::class);
    }

    public function getDates() {
        return ['created_at', 'updated_at'];
    }

    use PresentableTrait;
    protected $presenter = PostPresenter::class;
}
