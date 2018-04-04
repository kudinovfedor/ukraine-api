<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'hosting_site';

    protected $method = 'info';
}
