<?php

namespace App\Services;

use App\Exceptions\UserException;
use App\Models\User;

class UserService
{

    public function search($user_id)
    {
        $user = User::find($user_id);
        if (!$user) {
            throw new UserException();
        }

        return $user;
    }
}

