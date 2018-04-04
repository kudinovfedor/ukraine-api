<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Quota;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class UsedMySQLRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Quota
 */
class UsedMySQLRequest extends AbstractRequest
{
    protected $class = 'hosting_quota';

    protected $method = 'used_mysql';
}
