<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'info';
}
