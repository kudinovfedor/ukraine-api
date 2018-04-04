<?php

namespace KudinovFedor\AdmTools\Request\DNS\Record;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Record
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'dns_record';

    protected $method = 'info';
}
