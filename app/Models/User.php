<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    const TABLE = 'user';

    const USER_ID = 'user_id';
    const NAME = 'name';
    const COMMENT = 'comment';

    protected $fillable = [
        self::USER_ID,
        self::NAME,
        self::COMMENT,
    ];

}
