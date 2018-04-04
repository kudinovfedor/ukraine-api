<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class UserPasswordRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class UserPasswordRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'user_password';
}
