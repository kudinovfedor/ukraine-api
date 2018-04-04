<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Mailbox;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CreateRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Mailbox
 */
class CreateRequest extends AbstractRequest
{
    protected $class = 'hosting_mailbox';

    protected $method = 'create';
}
