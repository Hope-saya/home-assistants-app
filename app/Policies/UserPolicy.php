<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true; // All users can view all models
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $User): bool
    {
        return true; // All users can view a specific model
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true; // All users can create models
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $User): bool
    {
        return $user->id === $User->id || $user->email === 'admin@HomeAid.com';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $User): bool
    {
        return $user->id === $User->id || $user->email === 'admin@HomeAid.com';
    }
}
