<?php

namespace KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CrtLetsEncryptCancelRequest
 * @package KudinovFedor\AdmTools\Request\Hosting\Site\Config\SSL
 */
class CrtLetsEncryptCancelRequest extends AbstractRequest
{
    protected $class = 'hosting_site_config_ssl';

    protected $method = 'ctr_lets_encrypt_cancel';
}
