<?php

namespace KudinovFedor\AdmTools\Request\Hosting\FTP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class EditRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\FTP
 */
class EditRequest extends AbstractRequest
{
    protected $class = 'hosting_ftp';

    protected $method = 'edit';
}
