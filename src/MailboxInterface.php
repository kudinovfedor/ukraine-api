<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface MailboxInterface
 * @package KudinovFedor\AdmTools
 */
interface MailboxInterface
{
    /**
     * @param array $options
     * @return mixed
     */
    public function mailboxInfo(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function mailboxCreate(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function mailboxEdit(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function mailboxClear(array $options);

    /**
     * @param array $options
     * @return mixed
     */
    public function mailboxDelete(array $options);
}
