<?php

namespace KudinovFedor\AdmTools\Request\Hosting\FTP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\FTP
 */
class DeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_ftp';

    protected $method = 'delete';
}
