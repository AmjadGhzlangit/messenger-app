<?php

namespace App\Enum;

enum ConversationRoleEnum:string
{
    case SUPER_ADMIN = 'super_admin';
    case ADMIN = 'admin';
    case MEMBER = 'member';
}
