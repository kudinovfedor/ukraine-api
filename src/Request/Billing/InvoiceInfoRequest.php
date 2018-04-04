<?php

namespace KudinovFedor\AdmTools\Request\Billing;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InvoiceInfoRequest
 * @package KudinovFedor\AdmTools\Request\Billing
 */
class InvoiceInfoRequest extends AbstractRequest
{
    protected $class = 'billing_invoice';

    protected $method = 'info';
}
