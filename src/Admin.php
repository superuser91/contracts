<?php

namespace Vgplay\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

interface Admin
{
    public function roles(): BelongsToMany;
    public function hasRole($name): bool;
    public function hasPermission($name): bool;
}
