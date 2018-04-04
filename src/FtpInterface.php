<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface FtpInterface
 * @package KudinovFedor\AdmTools
 */
interface FtpInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function ftpInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function ftpCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function ftpEdit(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function ftpDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function ftpStackDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function ftpAccessInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function ftpAccessEdit(array $options);
}
