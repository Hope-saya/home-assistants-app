<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\ApplicationSubmission;

class ApplicationSubmissionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any application submissions.
     */
    public function viewAny(User $user): bool
    {
        return true; // All users can view all application submissions
    }

    /**
     * Determine whether the user can view the application submission.
     */
    public function view(User $user, ApplicationSubmission $applicationSubmission): bool
    {
        return true; // All users can view a specific application submission
    }

    /**
     * Determine whether the user can create application submissions.
     */
    public function create(User $user): bool
    {
        return true; // All users can create application submissions
    }

    /**
     * Determine whether the user can update the application submission.
     */
    public function update(User $user, ApplicationSubmission $applicationSubmission): bool
    {
        // Admin can edit all application submissions
        // Other users can only edit their own application submissions
        return $user->email === 'admin@homeAid.com' || $user->id === $applicationSubmission->househelp_id;
    }

    /**
     * Determine whether the user can delete the application submission.
     */
    public function delete(User $user, ApplicationSubmission $applicationSubmission): bool
    {
        return $user->email === 'admin@homeAid.com' || $user->id === $applicationSubmission->househelp_id;
    }
}
