<?php

namespace App\Policies;

use App\Models\Cuit;
use App\Models\User;

class CuitPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Cuit $cuit): bool
    {
        return $cuit->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Cuit $cuit): bool
    {
        return $this->update($user, $cuit);
    }
}
