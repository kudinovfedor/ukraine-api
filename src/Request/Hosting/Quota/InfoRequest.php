<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Quota;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Quota
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'hosting_quota';

    protected $method = 'info';
}
