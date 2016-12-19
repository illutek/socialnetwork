<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;
use Carbon\Carbon;

class ProfilePresenter extends Presenter
{
    public function accountAge()
    {
        /**
         * Error
         * Call to a member function diffForHumans() on string
         * in de user model een functie toegevoegd om laravel
         * wijs te make dat het veld dob een date type is
         * created_at en updated_at in een moeite meegenomen
         */

        return $this->dob->diff(Carbon::now())->format('%y');


    }
}