<?php

namespace App;

use Devlob\Auth\HasApiTokens;
use Devlob\Database\Goku\Model;

class User extends Model
{
    use HasApiTokens;
}