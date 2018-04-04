<?php

namespace KudinovFedor\AdmTools\Request\Hosting\FTP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CreateRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\FTP
 */
class CreateRequest extends AbstractRequest
{
    protected $class = 'hosting_ftp';

    protected $method = 'create';
}
