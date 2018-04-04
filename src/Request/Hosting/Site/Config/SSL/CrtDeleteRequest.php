<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CrtDeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL
 */
class CrtDeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ssl';

    protected $method = 'ctr_delete';
}
