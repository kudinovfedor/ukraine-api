<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class HostStackDeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site
 */
class HostStackDeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_site';

    protected $method = 'host_stack_delete';
}
