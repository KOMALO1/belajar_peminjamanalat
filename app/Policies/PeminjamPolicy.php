<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Peminjam;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeminjamPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Peminjam');
    }

    public function view(AuthUser $authUser, Peminjam $peminjam): bool
    {
        return $authUser->can('View:Peminjam');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Peminjam');
    }

    public function update(AuthUser $authUser, Peminjam $peminjam): bool
    {
        return $authUser->can('Update:Peminjam');
    }

    public function delete(AuthUser $authUser, Peminjam $peminjam): bool
    {
        return $authUser->can('Delete:Peminjam');
    }

    public function restore(AuthUser $authUser, Peminjam $peminjam): bool
    {
        return $authUser->can('Restore:Peminjam');
    }

    public function forceDelete(AuthUser $authUser, Peminjam $peminjam): bool
    {
        return $authUser->can('ForceDelete:Peminjam');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Peminjam');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Peminjam');
    }

    public function replicate(AuthUser $authUser, Peminjam $peminjam): bool
    {
        return $authUser->can('Replicate:Peminjam');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Peminjam');
    }

}