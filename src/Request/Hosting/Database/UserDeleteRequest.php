<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class UserDeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class UserDeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'user_delete';
}
