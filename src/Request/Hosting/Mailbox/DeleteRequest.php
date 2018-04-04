<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Mailbox;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class DeleteRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Mailbox
 */
class DeleteRequest extends AbstractRequest
{
    protected $class = 'hosting_mailbox';

    protected $method = 'delete';
}
