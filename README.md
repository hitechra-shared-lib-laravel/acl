# Laravel ACL

Maintained by Hitechra Engineer Team

Access Control List made easy

## Installation

Run composer command

`composer require hitechra-shared-lib-laravel/acl`

Publish migration and config

`php artisan vendor:publish --provider="HitechraSharedLibLaravel\Acl\ServiceProvider"`

## Usage

Use `HitechraSharedLibLaravel\Acl\HasRole` Trait to User model

```
    class User extends Authenticatable
    {
        ...
        use \HitechraSharedLibLaravel\Acl\HasRole;
```

### Assign Role
```
    $user->assignRole('admin');
```

### Remove Role
```
    $user->removeRole('admin');
```

### Get Roles Collection
```
    $user->roles;
```

### Check if user has a role
```
    $user->is_a('admin');
```
