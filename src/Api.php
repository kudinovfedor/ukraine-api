<?php

namespace KudinovFedor\AdmTools;

/**
 * Class Api
 *
 * Access to the API can only be obtained by a user who is registered at adm.tools and is a customer of the company.
 * Also, for the account must be configured two-step authorization.
 * You can get a token in the section Access Data (https://adm.tools/user/api/).
 *
 * @package KudinovFedor\AdmTools
 * @author Kudinov Fedor <admin@joompress.biz>
 */
class Api extends AbstractAdmTools
{
    /**
     * Api constructor.
     * @param string $login
     * @param string $token
     * @param string $base_uri
     * @param string $format
     */
    public function __construct(
        string $login,
        string $token,
        string $base_uri = 'https://adm.tools/api.php',
        string $format = 'json'
    ) {
        parent::__construct($login, $token, $base_uri, $format);
    }

    /**
     * @param Request\AbstractRequest $request
     * @return mixed|\SimpleXMLElement|string
     */
    protected function execute(Request\AbstractRequest $request)
    {
        $request_options = $request->getOptions();

        $options = [
            'form_params' => [
                'auth_login' => $this->getLogin(),
                'auth_token' => $this->getToken(),
                'format' => $this->getFormat(),
                'class' => $request->getClass(),
                'method' => $request->getMethod(),
            ],
        ];

        $options = [
            'form_params' => array_merge(
                $options['form_params'],
                $request_options
            )
        ];

        try {

            return $this->sendRequest($options);

        } catch (\GuzzleHttp\Exception\GuzzleException $e) {

            return 'Exception: ' . $e->getMessage();

        } catch (\Exception $e) {

            return 'Exception: ' . $e->getMessage();

        }
    }

    /**
     * @param array $options
     * @return mixed|\SimpleXMLElement
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     */
    protected function sendRequest(array $options = [])
    {
        $format = $options['form_params']['format'] ?? $this->getFormat();

        $response = $this->client->request('POST', '', $options);

        return (new Patterns\Strategy\ResponseFormat($format))->parseResponse($response);
    }

    public function accountPlans()
    {
        return $this->execute(new Request\Hosting\Account\PlansRequest);
    }

    public function accountInfo(array $options = [])
    {
        return $this->execute(new Request\Hosting\Account\InfoRequest($options));
    }

    public function accountMigrate(array $options)
    {
        return $this->execute(new Request\Hosting\Account\MigrateRequest($options));
    }

    public function accountMigrateCancel(array $options = [])
    {
        return $this->execute(new Request\Hosting\Account\MigrateCancelRequest($options));
    }

    public function accountPlanChange(array $options)
    {
        return $this->execute(new Request\Hosting\Account\PlanChangeRequest($options));
    }

    public function billingCartOrder(array $options)
    {
        return $this->execute(new Request\Billing\CartOrderRequest($options));
    }

    public function billingCartProlong(array $options)
    {
        return $this->execute(new Request\Billing\CartProlongRequest($options));
    }

    public function billingCartBuy(array $options)
    {
        return $this->execute(new Request\Billing\CartBuyRequest($options));
    }

    public function billingInvoiceInfo(array $options = [])
    {
        return $this->execute(new Request\Billing\InvoiceInfoRequest($options));
    }

    public function billingInvoicePay(array $options)
    {
        return $this->execute(new Request\Billing\InvoicePayRequest($options));
    }

    public function configPhpEdit(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\PHP\EditRequest($options));
    }

    public function configPhpByDefined(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\PHP\ByDefinedRequest($options));
    }

    public function configPhpByHost(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\PHP\ByHostRequest($options));
    }

    public function configPhpByHostCancel(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\PHP\ByHostCancelRequest($options));
    }

    public function configPhpByDefault(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\PHP\ByDefaultRequest($options));
    }

    public function configSslCrtInfo(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\SSL\CrtInfoRequest($options));
    }

    public function configSslCrtInstall(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\SSL\CrtInstallRequest($options));
    }

    public function configSslCrtLetsEncrypt(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\SSL\CrtLetsEncryptRequest($options));
    }

    public function configSslCrtLetsEncryptCancel(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\SSL\CrtLetsEncryptCancelRequest($options));
    }

    public function configSslCrtDelete(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\SSL\CrtDeleteRequest($options));
    }

    public function configSslEnable(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\SSL\EnableRequest($options));
    }

    public function configSslDisable(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\SSL\DisableRequest($options));
    }

    public function configWsEdit(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\WS\EditRequest($options));
    }

    public function configWsOptimize(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\WS\OptimizeRequest($options));
    }

    public function configWsCacheClear(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\WS\CacheClearRequest($options));
    }

    public function configWsByDefault(array $options)
    {
        return $this->execute(new Request\Hosting\Site\Config\WS\ByDefaultRequest($options));
    }

    public function databaseInfo(array $options)
    {
        return $this->execute(new Request\Hosting\Database\InfoRequest($options));
    }

    public function databaseCreate(array $options)
    {
        return $this->execute(new Request\Hosting\Database\CreateRequest($options));
    }

    public function databaseDelete(array $options)
    {
        return $this->execute(new Request\Hosting\Database\DeleteRequest($options));
    }

    public function databaseUserCreate(array $options)
    {
        return $this->execute(new Request\Hosting\Database\UserCreateRequest($options));
    }

    public function databaseUserPassword(array $options)
    {
        return $this->execute(new Request\Hosting\Database\UserPasswordRequest($options));
    }

    public function databaseUserPrivileges(array $options)
    {
        return $this->execute(new Request\Hosting\Database\UserPrivilegesRequest($options));
    }

    public function databaseUserRevoke(array $options)
    {
        return $this->execute(new Request\Hosting\Database\UserRevokeRequest($options));
    }

    public function databaseUserDelete(array $options)
    {
        return $this->execute(new Request\Hosting\Database\UserDeleteRequest($options));
    }

    public function dnsDomainZones(array $options = [])
    {
        return $this->execute(new Request\DNS\Domain\ZonesRequest($options));
    }

    public function dnsDomainInfo(array $options = [])
    {
        return $this->execute(new Request\DNS\Domain\InfoRequest($options));
    }

    public function dnsDomainCheck(array $options)
    {
        return $this->execute(new Request\DNS\Domain\CheckRequest($options));
    }

    public function dnsDomainCreate(array $options)
    {
        return $this->execute(new Request\DNS\Domain\CreateRequest($options));
    }

    public function dnsDomainDelete(array $options)
    {
        return $this->execute(new Request\DNS\Domain\DeleteRequest($options));
    }

    public function dnsRecordInfo(array $options)
    {
        return $this->execute(new Request\DNS\Record\InfoRequest($options));
    }

    public function dnsRecordCreate(array $options)
    {
        return $this->execute(new Request\DNS\Record\CreateRequest($options));
    }

    public function dnsRecordEdit(array $options)
    {
        return $this->execute(new Request\DNS\Record\EditRequest($options));
    }

    public function dnsRecordRestore(array $options)
    {
        return $this->execute(new Request\DNS\Record\RestoreRequest($options));
    }

    public function dnsRecordMxPredefined(array $options)
    {
        return $this->execute(new Request\DNS\Record\MxPredefinedRequest($options));
    }

    public function dnsRecordDelete(array $options)
    {
        return $this->execute(new Request\DNS\Record\DeleteRequest($options));
    }

    public function dnsNsInfo(array $options)
    {
        return $this->execute(new Request\DNS\NS\InfoRequest($options));
    }

    public function dnsNsEdit(array $options)
    {
        return $this->execute(new Request\DNS\NS\EditRequest($options));
    }

    public function dnsNsRestore(array $options)
    {
        return $this->execute(new Request\DNS\NS\RestoreRequest($options));
    }

    public function ftpInfo(array $options)
    {
        return $this->execute(new Request\Hosting\FTP\InfoRequest($options));
    }

    public function ftpCreate(array $options)
    {
        return $this->execute(new Request\Hosting\FTP\CreateRequest($options));
    }

    public function ftpEdit(array $options)
    {
        return $this->execute(new Request\Hosting\FTP\EditRequest($options));
    }

    public function ftpDelete(array $options)
    {
        return $this->execute(new Request\Hosting\FTP\DeleteRequest($options));
    }

    public function ftpStackDelete(array $options)
    {
        return $this->execute(new Request\Hosting\FTP\StackDeleteRequest($options));
    }

    public function ftpAccessInfo(array $options)
    {
        return $this->execute(new Request\Hosting\FTP\AccessInfoRequest($options));
    }

    public function ftpAccessEdit(array $options)
    {
        return $this->execute(new Request\Hosting\FTP\AccessEditRequest($options));
    }

    public function logDates(array $options)
    {
        return $this->execute(new Request\Hosting\Log\DatesRequest($options));
    }

    public function logView(array $options)
    {
        return $this->execute(new Request\Hosting\Log\ViewRequest($options));
    }

    public function logDownload(array $options)
    {
        return $this->execute(new Request\Hosting\Log\DownloadRequest($options));
    }

    public function mailboxInfo(array $options)
    {
        return $this->execute(new Request\Hosting\Mailbox\InfoRequest($options));
    }

    public function mailboxCreate(array $options)
    {
        return $this->execute(new Request\Hosting\Mailbox\CreateRequest($options));
    }

    public function mailboxEdit(array $options)
    {
        return $this->execute(new Request\Hosting\Mailbox\EditRequest($options));
    }

    public function mailboxClear(array $options)
    {
        return $this->execute(new Request\Hosting\Mailbox\ClearRequest($options));
    }

    public function mailboxDelete(array $options)
    {
        return $this->execute(new Request\Hosting\Mailbox\DeleteRequest($options));
    }

    public function quotaInfo(array $options)
    {
        return $this->execute(new Request\Hosting\Quota\InfoRequest($options));
    }

    public function quotaUsedFtp(array $options)
    {
        return $this->execute(new Request\Hosting\Quota\UsedFTPRequest($options));
    }

    public function quotaUsedMySql(array $options)
    {
        return $this->execute(new Request\Hosting\Quota\UsedMySQLRequest($options));
    }

    public function siteInfo(array $options)
    {
        return $this->execute(new Request\Hosting\Site\InfoRequest($options));
    }

    public function siteCreate(array $options)
    {
        return $this->execute(new Request\Hosting\Site\CreateRequest($options));
    }

    public function siteDelete(array $options)
    {
        return $this->execute(new Request\Hosting\Site\DeleteRequest($options));
    }

    public function siteHostCreate(array $options)
    {
        return $this->execute(new Request\Hosting\Site\HostCreateRequest($options));
    }

    public function siteHostDelete(array $options)
    {
        return $this->execute(new Request\Hosting\Site\HostDeleteRequest($options));
    }

    public function siteHostStackDelete(array $options)
    {
        return $this->execute(new Request\Hosting\Site\HostStackDeleteRequest($options));
    }
}
