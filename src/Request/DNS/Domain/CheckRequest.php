<?php

namespace KudinovFedor\AdmTools\Request\DNS\Domain;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CheckRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Domain
 */
class CheckRequest extends AbstractRequest
{
    protected $class = 'dns_domain';

    protected $method = 'check';
}
