<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class User extends Model
{
    use HasFactory;

    const TABLE = 'users';

    const USER_ID = 'user_id';
    const NAME = 'name';
    const COMMENT = 'comment';

    const FILLABLE = [
        self::USER_ID,
        self::NAME,
        self::COMMENT,
    ];

    protected $fillable = self::FILLABLE;

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

}
