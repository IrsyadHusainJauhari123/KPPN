<?php

namespace App\Models;

use App\Models\Profil;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    protected $table = 'user';
    // use HasFactory, Notifiable;

    // function Profile()
    // {
    //     $this->hasMany(Profil::class, 'id_user')
    // }
}
