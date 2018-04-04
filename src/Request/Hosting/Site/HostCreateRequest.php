<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class HostCreateRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site
 */
class HostCreateRequest extends AbstractRequest
{
    protected $class = 'hosting_site';

    protected $method = 'host_create';

}
