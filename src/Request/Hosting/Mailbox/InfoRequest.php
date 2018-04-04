<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Mailbox;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InfoRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Mailbox
 */
class InfoRequest extends AbstractRequest
{
    protected $class = 'hosting_mailbox';

    protected $method = 'info';
}
