<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CreateRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class CreateRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'database_create';
}
