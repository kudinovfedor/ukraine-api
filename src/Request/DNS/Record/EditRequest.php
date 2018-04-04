<?php

namespace KudinovFedor\AdmTools\Request\DNS\Record;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class EditRequest
 * @package KudinovFedor\AdmTools\Request\DNS\Record
 */
class EditRequest extends AbstractRequest
{
    protected $class = 'dns_record';

    protected $method = 'edit';
}
