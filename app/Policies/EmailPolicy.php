<?php

namespace App\Policies;

use App\User;
use App\Email;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmailPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can update the email.
     *
     * @param  \App\User  $user
     * @param  \App\Email  $email
     * @return mixed
     */
    public function update(User $user, Email $email)
    {
        return $email->owner_id === $user->id;
    }
}
