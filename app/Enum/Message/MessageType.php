<?php

namespace App\Enum\Message;

enum MessageType :string 
{
    case TEXT = 'text';
    case ATTACHMENT = 'attachment';
}