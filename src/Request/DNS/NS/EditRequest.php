<?php

namespace KudinovFedor\AdmTools\Request\DNS\NS;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class EditRequest
 * @package KudinovFedor\AdmTools\Request\DNS\NS
 */
class EditRequest extends AbstractRequest
{
    protected $class = 'dns_ns';

    protected $method = 'edit';
}
