<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    //     /**
    //      * Determine whether the user can view any models.
    //      */
    //     public function viewAny(User $user): bool
    //     {
    //         return true; // All users can view all models
    //     }

    /**
     * Determine whether the user can view the model.
     */
    // public function view(User $user, User $User): bool
    // {
    //     return true; // All users can view a specific model
    // }

    // /**
    //  * Determine whether the user can create models.
    //  */
    // public function create(User $user): bool
    // {
    //     return true; // All users can create models
    // }

    /**
     * Determine whether the user can update the model.
     */
    // public function update(User $loggedInUser, User $targetUser): bool
    // {

    //dd($loggedInUser->email, $loggedInUser->id, $targetUser->email, $targetUser->id);

    // Admin can edit all users
    // Other users can only edit their own profile
    // return $loggedInUser->email === 'admin@homeAid.com' || $loggedInUser->id === $targetUser->id;
    //     }

    //     /**
    //      * Determine whether the user can delete the model.
    //      */
    //     // public function delete(User $loggedInUser, User $targetUser): bool
    //     // {

    //         // dd($loggedInUser->email, $loggedInUser->id, $targetUser->email, $targetUser->id);
    //         // return $loggedInUser->email === 'admin@homeAid.com' || $loggedInUser->id === $targetUser->id;
    //     // }
    // }
}
