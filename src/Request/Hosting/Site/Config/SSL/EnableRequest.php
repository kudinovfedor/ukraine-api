<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class EnableRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL
 */
class EnableRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ssl';

    protected $method = 'enable';
}
