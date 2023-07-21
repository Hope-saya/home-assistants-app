<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\JobPosting;

class JobPostingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any job postings.
     */
    public function viewAny(User $user): bool
    {
        return true; // All users can view all job postings
    }

    /**
     * Determine whether the user can view the job posting.
     */
    public function view(User $user, JobPosting $jobPosting): bool
    {
        return true; // All users can view a specific job posting
    }

    /**
     * Determine whether the user can create job postings.
     */
    public function create(User $user): bool
    {
        return true; // All users can create job postings
    }

    /**
     * Determine whether the user can update the job posting.
     */
    public function update(User $user, JobPosting $jobPosting): bool
    {
        // Admin can edit all job postings
        // Other users can only edit their own job postings
        return $user->email === 'admin@homeAid.com' || $user->id === $jobPosting->user_id;
    }

    /**
     * Determine whether the user can delete the job posting.
     */
    public function delete(User $user, JobPosting $jobPosting): bool
    {
        return $user->email === 'admin@homeAid.com' || $user->id === $jobPosting->user_id;
    }
}
