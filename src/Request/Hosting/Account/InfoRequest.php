<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Account;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Account
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'hosting_account';

    protected $method = 'info';
}
