<?php

namespace KudinovFedor\AdmTools\Request\DNS\Record;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class MxPredefinedRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Record
 */
class MxPredefinedRequest extends AbstractRequest
{
    protected $class = 'dns_record';

    protected $method = 'mx_predefined';
}
