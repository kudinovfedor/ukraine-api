<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CacheClearRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS
 */
class CacheClearRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ws';

    protected $method = 'cache_clear';
}
