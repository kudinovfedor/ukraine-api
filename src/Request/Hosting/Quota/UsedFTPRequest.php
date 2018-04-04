<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Quota;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class UsedFTPRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Quota
 */
class UsedFTPRequest extends AbstractRequest
{
    protected $class = 'hosting_quota';

    protected $method = 'used_ftp';
}
