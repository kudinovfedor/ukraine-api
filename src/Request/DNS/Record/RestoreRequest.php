<?php

namespace KudinovFedor\AdmTools\Request\DNS\Record;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class RestoreRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Record
 */
class RestoreRequest extends AbstractRequest
{
    protected $class = 'dns_record';

    protected $method = 'restore';
}
