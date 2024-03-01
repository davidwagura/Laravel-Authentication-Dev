<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements
    AuthenticatableContract,
    AuthorizableContract
{
    use HasFactory;
    use Authenticatable;
    use Authorizable;
    use MustVerifyEmail;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
