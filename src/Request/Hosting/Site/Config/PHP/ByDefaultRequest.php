<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class ByDefaultRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP
 */
class ByDefaultRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_php';

    protected $method = 'by_default';
}
