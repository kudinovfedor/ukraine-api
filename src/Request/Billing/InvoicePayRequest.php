<?php

namespace KudinovFedor\AdmTools\Request\Billing;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class InvoicePayRequest
 * @package KudinovFedor\AdmTools\Request\Billing
 */
class InvoicePayRequest extends AbstractRequest
{
    protected $class = 'billing_invoice';

    protected $method = 'pay';
}
