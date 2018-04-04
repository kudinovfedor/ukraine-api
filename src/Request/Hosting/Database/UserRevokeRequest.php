<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class UserRevokeRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class UserRevokeRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'user_revoke';
}
