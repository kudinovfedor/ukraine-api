<?php

namespace KudinovFedor\AdmTools\Request\DNS\Domain;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CreateRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Domain
 */
class CreateRequest extends AbstractRequest
{
    protected $class = 'dns_domain';

    protected $method = 'create';
}
