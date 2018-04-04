<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class UserPrivilegesRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class UserPrivilegesRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'user_privileges';
}
