<?php

namespace KudinovFedor\AdmTools\Request\DNS\Record;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DeleteRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Record
 */
class DeleteRequest extends AbstractRequest
{
    protected $class = 'dns_record';

    protected $method = 'delete';
}
