<?php

namespace KudinovFedor\AdmTools\Request\Hosting\FTP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class AccessInfoRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\FTP
 */
class AccessInfoRequest extends AbstractRequest
{
    protected $class = 'hosting_ftp';

    protected $method = 'access_info';
}
