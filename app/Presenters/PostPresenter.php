<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;


class PostPresenter extends Presenter
{

    public function createdAt() {

        return $this->created_at->format('d/m/Y');
    }

}