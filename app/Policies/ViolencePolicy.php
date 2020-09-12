<?php

namespace App\Policies;

use App\User;
use App\Violence;
use Illuminate\Auth\Access\HandlesAuthorization;

class ViolencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any violences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return  $user->hasPermissionTo('viewViolences');
    }

    /**
     * Determine whether the user can view the violence.
     *
     * @param  \App\User  $user
     * @param  \App\Violence  $violence
     * @return mixed
     */
    public function view(User $user, Violence $violence)
    {
        return  $user->hasPermissionTo('viewViolences');
    }

    /**
     * Determine whether the user can create violences.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return  $user->hasPermissionTo('createViolences');
    }

    /**
     * Determine whether the user can update the violence.
     *
     * @param  \App\User  $user
     * @param  \App\Violence  $violence
     * @return mixed
     */
    public function update(User $user, Violence $violence)
    {
        return  $user->hasPermissionTo('updateViolences');
    }

    /**
     * Determine whether the user can delete the violence.
     *
     * @param  \App\User  $user
     * @param  \App\Violence  $violence
     * @return mixed
     */
    public function delete(User $user, Violence $violence)
    {
        return  $user->hasPermissionTo('deleteViolences');
    }

    /**
     * Determine whether the user can restore the violence.
     *
     * @param  \App\User  $user
     * @param  \App\Violence  $violence
     * @return mixed
     */
    public function restore(User $user, Violence $violence)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the violence.
     *
     * @param  \App\User  $user
     * @param  \App\Violence  $violence
     * @return mixed
     */
    public function forceDelete(User $user, Violence $violence)
    {
        //
    }
}
