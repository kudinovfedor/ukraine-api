<?php

namespace KudinovFedor\AdmTools\Request\Billing;

use KudinovFedor\AdmTools\Request\AbstractRequest;

/**
 * Class CartProlongRequest
 * @package KudinovFedor\AdmTools\Request\Billing
 */
class CartProlongRequest extends AbstractRequest
{
    protected $class = 'billing_cart';

    protected $method = 'prolong';
}
