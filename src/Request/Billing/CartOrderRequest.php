<?php

namespace KudinovFedor\AdmTools\Request\Billing;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CartOrderRequest
 * @package KudinovFedor\AdmTools\Request\Billing
 */
class CartOrderRequest extends AbstractRequest
{
    protected $class = 'billing_cart';

    protected $method = 'order';
}
