<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Account;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class PlansRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Account
 */
class PlansRequest extends AbstractRequest
{
    protected $class = 'hosting_account';

    protected $method = 'plans';
}
