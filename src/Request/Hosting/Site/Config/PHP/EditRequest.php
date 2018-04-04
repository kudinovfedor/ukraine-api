<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class EditRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\PHP
 */
class EditRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_php';

    protected $method = 'edit';
}
