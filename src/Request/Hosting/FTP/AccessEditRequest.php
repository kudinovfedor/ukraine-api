<?php

namespace KudinovFedor\AdmTools\Request\Hosting\FTP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class AccessEditRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\FTP
 */
class AccessEditRequest extends AbstractRequest
{
    protected $class = 'hosting_ftp';

    protected $method = 'access_edit';
}
