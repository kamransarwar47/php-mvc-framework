<?php

namespace App\Core;

use App\Core\DB\DbModel;

abstract class UserModel extends DbModel
{
    abstract function getDisplayName(): string;
}