<?php

return [
    'database' => [
        'driver' => 'default',
    ],

    'model' => [
        'role' => \HitechraSharedLibLaravel\Acl\Models\Role::class,
        'permission' => \HitechraSharedLibLaravel\Acl\Models\Permission::class,
    ]
];