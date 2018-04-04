<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class EditRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\WS
 */
class EditRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ws';

    protected $method = 'edit';
}
