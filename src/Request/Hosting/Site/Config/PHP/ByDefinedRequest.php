<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class ByDefinedRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP
 */
class ByDefinedRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_php';

    protected $method = 'by_defined';
}
