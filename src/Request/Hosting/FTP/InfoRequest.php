<?php

namespace KudinovFedor\AdmTools\Request\Hosting\FTP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\FTP
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'hosting_ftp';

    protected $method = 'info';
}
