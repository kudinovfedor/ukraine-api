<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Mailbox;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class EditRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Mailbox
 */
class EditRequest extends AbstractRequest
{
    protected $class = 'hosting_mailbox';

    protected $method = 'edit';
}
