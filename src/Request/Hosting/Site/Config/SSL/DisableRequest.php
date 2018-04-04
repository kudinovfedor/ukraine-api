<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DisableRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL
 */
class DisableRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ssl';

    protected $method = 'disable';
}
