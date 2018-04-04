<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Database;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Database
 */
class DeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_database';

    protected $method = 'database_delete';
}
