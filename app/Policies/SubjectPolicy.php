<?php

namespace App\Policies;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SubjectPolicy
{
    /**
     * Determine whether the profile can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the profile can view the model.
     */
    public function view(User $user, Subject $subject): bool
    {
        //
    }

    /**
     * Determine whether the profile can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the profile can update the model.
     */
    public function update(User $user, Subject $subject): bool
    {
        //
    }

    /**
     * Determine whether the profile can delete the model.
     */
    public function delete(User $user, Subject $subject): bool
    {
        //
    }

    /**
     * Determine whether the profile can restore the model.
     */
    public function restore(User $user, Subject $subject): bool
    {
        //
    }

    /**
     * Determine whether the profile can permanently delete the model.
     */
    public function forceDelete(User $user, Subject $subject): bool
    {
        //
    }
}
