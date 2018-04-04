<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CreateRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site
 */
class CreateRequest extends AbstractRequest
{
    protected $class = 'hosting_site';

    protected $method = 'site_create';
}
