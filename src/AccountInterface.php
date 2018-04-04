<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface AccountInterface
 * @package KudinovFedor\AdmTools
 */
interface AccountInterface
{
    /**
     * @return mixed
     */
    public function accountPlans();

    /**
     * @param array $options
     * @return mixed
     */
    public function accountInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function accountMigrate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function accountMigrateCancel(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function accountPlanChange(array $options);
}
