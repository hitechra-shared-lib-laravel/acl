<?php

// create createRole function if not exists
if (!function_exists('createRole')) {
    function createRole($role_name, $role_title)
    {
        $role_name = strtolower(\Illuminate\Support\Str::snake($role_name));
        $role = config('acl.model.role')::where('name', $role_name)->first();
        if (!$role) {
            $role = config('acl.model.role')::create(['name' => $role_name, 'title' => $role_title]);
        }
        return $role;
    }
}

// create deleteRole function if not exists
if (!function_exists('deleteRole')) {
    function deleteRole($role_name)
    {
        $role_name = strtolower(\Illuminate\Support\Str::snake($role_name));

        $role = config('acl.model.role')::where('name', $role_name)->first();
        if ($role) {
            $role->delete();
        }
    }
}