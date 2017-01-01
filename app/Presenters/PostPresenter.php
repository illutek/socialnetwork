<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;


class PostPresenter extends Presenter
{

    public function createdAt() {

        return $this->created_at->format('d/m/Y');
    }

    public function sidebarFirst()
    {
        $value = (auth()->check()) ? 'col-md-3 col-md-pull-6' : 'col-md-3 col-md-pull-9';

        return $value;
    }

}