<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

        //\App\Models\User::class => \App\Policies\UserPolicy::class,
        App\Models\JobApplication::class => \App\Policies\JobApplicationPolicy::class,
        App\Models\JobPosting::class => \App\Policies\JobPostingPolicy::class,
        App\Models\ApplicationSubmission::class => \App\Policies\ApplicationSubmissionPolicy::class,
        //
    ];


    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
