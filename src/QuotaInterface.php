<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface QuotaInterface
 * @package KudinovFedor\AdmTools
 */
interface QuotaInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function quotaInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function quotaUsedFtp(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function quotaUsedMySql(array $options);
}
