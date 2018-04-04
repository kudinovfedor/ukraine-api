<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Log;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DownloadRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Log
 */
class DownloadRequest extends AbstractRequest
{
    protected $class = 'hosting_log';

    protected $method = 'download';
}
