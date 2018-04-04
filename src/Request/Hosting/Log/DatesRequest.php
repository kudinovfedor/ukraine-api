<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Log;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DatesRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Log
 */
class DatesRequest extends AbstractRequest
{
    protected $class = 'hosting_log';

    protected $method = 'dates';
}
