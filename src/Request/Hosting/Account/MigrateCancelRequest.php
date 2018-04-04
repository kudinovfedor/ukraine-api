<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Account;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class MigrateCancelRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Account
 */
class MigrateCancelRequest extends AbstractRequest
{
    protected $class = 'hosting_account';

    protected $method = 'migration_cancel';
}
