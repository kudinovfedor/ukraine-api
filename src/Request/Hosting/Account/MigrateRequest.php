<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Account;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class MigrateRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Account
 */
class MigrateRequest extends AbstractRequest
{
    protected $class = 'hosting_account';

    protected $method = 'migrate';
}
