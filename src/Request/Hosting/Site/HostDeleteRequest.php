<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class HostDeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site
 */
class HostDeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_site';

    protected $method = 'host_delete';
}
