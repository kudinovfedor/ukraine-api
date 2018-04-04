<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site
 */
class DeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_site';

    protected $method = 'site_delete';
}
