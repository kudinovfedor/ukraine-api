<?php

namespace KudinovFedor\AdmTools\Request\DNS\NS;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\DNS\NS
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'dns_ns';

    protected $method = 'info';
}
