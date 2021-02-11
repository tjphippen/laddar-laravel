<?php

declare(strict_types=1);

namespace App\Models;

use Tjphippen\Laddar\Laddar;

class User extends Laddar
{

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}
