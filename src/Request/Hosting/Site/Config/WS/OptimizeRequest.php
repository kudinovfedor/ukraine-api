<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class OptimizeRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS
 */
class OptimizeRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ws';

    protected $method = 'optimize';
}
