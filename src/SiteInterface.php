<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface SiteInterface
 * @package KudinovFedor\AdmTools
 */
interface SiteInterface extends ConfigInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function siteInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function siteCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function siteDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function siteHostCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function siteHostDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function siteHostStackDelete(array $options);
}
