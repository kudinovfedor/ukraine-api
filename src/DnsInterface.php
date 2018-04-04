<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface DnsInterface
 * @package KudinovFedor\AdmTools
 */
interface DnsInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function dnsDomainZones(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsDomainInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsDomainCheck(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsDomainCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsDomainDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsRecordInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsRecordCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsRecordEdit(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsRecordRestore(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsRecordMxPredefined(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsRecordDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsNsInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsNsEdit(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function dnsNsRestore(array $options);
}
