<?php
namespace App\Repositories\Permission;

interface PermissionRepositoryInterface
{
    public function getPermissionsOfRole($id);
}