<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CrtInstallRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL
 */
class CrtInstallRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ssl';

    protected $method = 'ctr_install';
}
