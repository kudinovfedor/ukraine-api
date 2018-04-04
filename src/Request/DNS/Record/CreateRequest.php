<?php

namespace KudinovFedor\AdmTools\Request\DNS\Record;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CreateRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Record
 */
class CreateRequest extends AbstractRequest
{
    protected $class = 'dns_record';

    protected $method = 'create';
}
