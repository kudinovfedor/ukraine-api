<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface LogInterface
 * @package KudinovFedor\AdmTools
 */
interface LogInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function logDates(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function logView(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function logDownload(array $options);
}
