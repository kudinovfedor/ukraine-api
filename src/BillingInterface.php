<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface BillingInterface
 * @package KudinovFedor\AdmTools
 */
interface BillingInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function billingCartOrder(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function billingCartProlong(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function billingCartBuy(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function billingInvoiceInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function billingInvoicePay(array $options);
}
