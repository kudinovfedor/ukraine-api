<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CrtSelfSignedRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL
 */
class CrtSelfSignedRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ssl';

    protected $method = 'ctr_self_signed';
}
