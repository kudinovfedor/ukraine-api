<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Mailbox;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class ClearRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Mailbox
 */
class ClearRequest extends AbstractRequest
{
    protected $class = 'hosting_mailbox';

    protected $method = 'clear';
}
