<?php

namespace App\Policies;

use App\Models\User;
use App\Models\JobApplication;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobApplicationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any job applications.
     */
    public function viewAny(User $user): bool
    {
        return true; // All users can view all job applications
    }

    /**
     * Determine whether the user can view the job application.
     */
    public function view(User $user, JobApplication $jobApplication): bool
    {
        return true; // All users can view a specific job application
    }

    /**
     * Determine whether the user can create job applications.
     */
    public function create(User $user): bool
    {
        return true; // All users can create job applications
    }

    public function update(User $user, JobApplication $jobApplication): bool
    {
        // Admin can edit all job applications
        // Other users can only edit their own job applications
        return $user->email === 'admin@homeAid.com' || $user->id === $jobApplication->user_id;
    }

    /**
     * Determine whether the user can delete the job application.
     */
    public function delete(User $user, JobApplication $jobApplication): bool
    {
        // Admin can delete all job applications
        // Other users can only delete their own job applications
        return $user->email === 'admin@homeAid.com' || $user->id === $jobApplication->user_id;
    }
}
