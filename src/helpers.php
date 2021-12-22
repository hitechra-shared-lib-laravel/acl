<?php

// create createRole function if not exists
if (!function_exists('createRole')) {
    function createRole($role_name, $role_title)
    {
        $role_name = strtolower(\Illuminate\Support\Str::snake($role_name));
        $role = Role::where('name', $role_name)->first();
        if (!$role) {
            $role = Role::create(['name' => $role_name, 'title' => $role_title]);
        }
        return $role;
    }
}

// create deleteRole function if not exists
if (!function_exists('deleteRole')) {
    function deleteRole($role_name)
    {
        $role_name = strtolower(\Illuminate\Support\Str::snake($role_name));

        // ensure that the role is not used by any user
        $users = User::whereHas('roles', function ($query) use ($role_name) {
            $query->where('name', $role_name);
        })->count();
        
        if ($users > 0) {
            return false;
        }

        $role = Role::where('name', $role_name)->first();
        if ($role) {
            $role->delete();
        }
    }
}