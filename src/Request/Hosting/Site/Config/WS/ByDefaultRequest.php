<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class ByDefaultRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS
 */
class ByDefaultRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ws';

    protected $method = 'by_default';
}
