<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Account;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class PlanChangeRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Account
 */
class PlanChangeRequest extends AbstractRequest
{
    protected $class = 'hosting_account';

    protected $method = 'plan_change';
}
