<?php

namespace KudinovFedor\AdmTools\Request\DNS\Domain;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DeleteRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Domain
 */
class DeleteRequest extends AbstractRequest
{
    protected $class = 'dns_domain';

    protected $method = 'delete';
}
