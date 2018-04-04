<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface ConfigInterface
 * @package KudinovFedor\AdmTools
 */
interface ConfigInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function configWsEdit(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configWsOptimize(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configWsCacheClear(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configWsByDefault(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configPhpEdit(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configPhpByDefined(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configPhpByHost(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configPhpByHostCancel(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configPhpByDefault(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configSslCrtInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configSslCrtInstall(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configSslCrtLetsEncrypt(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configSslCrtLetsEncryptCancel(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configSslCrtDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configSslEnable(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function configSslDisable(array $options);
}
