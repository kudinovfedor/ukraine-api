<?php

namespace KudinovFedor\AdmTools\Request\DNS\NS;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class RestoreRequest
 * @package KudinovFedor\AdmTools\Request\DNS\NS
 */
class RestoreRequest extends AbstractRequest
{
    protected $class = 'dns_ns';

    protected $method = 'restore';
}
