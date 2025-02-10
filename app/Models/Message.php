<?php

namespace App\Models;

use Database\Factories\MessageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 * @property string $message
 */
class Message extends Model
{
    /** @use HasFactory<MessageFactory> */
    use HasFactory;
}
