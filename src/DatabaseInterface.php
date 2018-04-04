<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface DatabaseInterface
 * @package KudinovFedor\AdmTools
 */
interface DatabaseInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function databaseInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function databaseCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function databaseDelete(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function databaseUserCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function databaseUserPassword(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function databaseUserPrivileges(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function databaseUserRevoke(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function databaseUserDelete(array $options);
}