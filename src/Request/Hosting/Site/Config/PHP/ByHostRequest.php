<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class ByHostRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP
 */
class ByHostRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_php';

    protected $method = 'by_host';
}
