<?php

namespace KudinovFedor\AdmTools\Request\Billing;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CartBuyRequest
 * @package KudinovFedor\AdmTools\Request\Billing
 */
class CartBuyRequest extends AbstractRequest
{
    protected $class = 'billing_cart';

    protected $method = 'buy';
}
