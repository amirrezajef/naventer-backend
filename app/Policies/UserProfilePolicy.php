<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserProfilePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    // public function viewAny(User $user): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UserProfile $userProfile): bool
    {
        return $user->id === $userProfile->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    // public function create(User $user): bool
    // {
    //     //
    // }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UserProfile $userProfile): bool
    {
        return $user->id === $userProfile->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UserProfile $userProfile): bool
    {
        return $user->id === $userProfile->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, UserProfile $userProfile): bool
    // {
    //     //
    // }

    // /**
    //  * Determine whether the user can permanently delete the model.
    //  */
    // public function forceDelete(User $user, UserProfile $userProfile): bool
    // {
    //     //
    // }
}
