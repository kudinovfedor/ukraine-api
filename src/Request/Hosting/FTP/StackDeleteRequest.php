<?php

namespace KudinovFedor\AdmTools\Request\Hosting\FTP;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class StackDeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\FTP
 */
class StackDeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_ftp';

    protected $method = 'stack_delete';
}
