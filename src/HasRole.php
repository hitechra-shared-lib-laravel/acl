<?php

namespace HitechraSharedLibLaravel\Acl;

trait HasRole
{
    public function roles()
    {
        return $this->morphToMany(config('acl.model.role'), 'model', 'role_model', 'model_id', 'role', 'id', 'name');
    }

    public function assignRole($role_name)
    {
        return $this->roles()->syncWithoutDetaching(Role::where('name', $role_name)->firstOrFail());
    }

    public function removeRole($role_name)
    {
        return $this->roles()->detach($role_name);
    }

    public function is_a($role_name)
    {
        return $this->roles->where('role', $role_name)->exists();
    }
}
