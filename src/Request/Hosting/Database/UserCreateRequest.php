<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class UserCreateRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class UserCreateRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'user_create';
}
