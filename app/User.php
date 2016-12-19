<?php

namespace App;

use App\Presenters\ProfilePresenter;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laracasts\Presenter\PresentableTrait;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'dob', 'name', 'gender', 'email', 'password',
    ];

    /**
     * @return array
     * om de 3 velden het type date te geven
     * http://laravel.io/forum/02-18-2014-getting-diffforhumans-to-work-on-other-timestamp-fields
     */
    public function getDates() {
        return ['created_at', 'updated_at', 'dob'];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The GenderPresenter
     * the Laracasts\Presenter\PresentableTrait trait, which will automatically instantiate your presenter class.
     */
    use PresentableTrait;
    protected $presenter = ProfilePresenter::class;
}