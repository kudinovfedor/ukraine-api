<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Log;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class ViewRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Log
 */
class ViewRequest extends AbstractRequest
{
    protected $class = 'hosting_log';

    protected $method = 'view';
}
