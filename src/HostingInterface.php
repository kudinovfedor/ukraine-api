<?php

namespace KudinovFedor\AdmTools;

/**
 * Interface HostingInterface
 * @package KudinovFedor\AdmTools
 */
interface HostingInterface extends QuotaInterface, LogInterface, MailboxInterface, FtpInterface, DatabaseInterface, SiteInterface, AccountInterface
{

}
