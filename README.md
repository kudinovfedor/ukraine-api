# PHP library for [ukraine.com.ua](https://www.ukraine.com.ua/) API
## Installation
You need [composer](https://getcomposer.org/) to install this library.
```
composer require kudinovfedor/ukraine-api
```

## Usage
```php
use KudinovFedor\AdmTools\Api;

$api = new Api('AUTH_LOGIN', 'AUTH_TOKEN');
```

or

```php
$api = new \KudinovFedor\AdmTools\Api('AUTH_LOGIN', 'AUTH_TOKEN');
```

### Laravel 5.5+:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
KudinovFedor\AdmTools\AdmToolsServiceProvider::class,
```

Copy the package config to your local config with the publish command:

```php
php artisan vendor:publish --provider="KudinovFedor\AdmTools\AdmToolsServiceProvider"
```

## Methods

What parameters accepts a particular method can be found in the official API documentation by reference **[api.adm.tools](https://api.adm.tools/)**

### Hosting Account

#### Account
##### accountPlans
##### accountInfo
##### accountMigrate
##### accountMigrateCancel
##### accountPlanChange

#### Database
##### databaseInfo
##### databaseCreate
##### databaseDelete
##### databaseUserCreate
##### databaseUserPassword
##### databaseUserPrivileges
##### databaseUserRevoke
##### databaseUserDelete

#### FTP
##### ftpInfo
##### ftpCreate
##### ftpEdit
##### ftpDelete
##### ftpStackDelete
##### ftpAccessInfo
##### ftpAccessEdit

#### Mailbox
##### mailboxInfo
##### mailboxCreate
##### mailboxEdit
##### mailboxClear
##### mailboxDelete

#### Quota
##### quotaInfo
##### quotaUsedFtp
##### quotaUsedMySql

#### Site
##### siteInfo
##### siteCreate
##### siteDelete
##### siteHostCreate
##### siteHostDelete
##### siteHostStackDelete
***    
##### configWsEdit
##### configWsOptimize
##### configWsCacheClear
##### configWsByDefault
##### configPhpEdit
##### configPhpByDefined
##### configPhpByHost
##### configPhpByHostCancel
##### configPhpByDefault
##### configSslCrtInfo
##### configSslCrtInstall
##### configSslCrtLetsEncrypt
##### configSslCrtLetsEncryptCancel
##### configSslCrtDelete
##### configSslEnable
##### configSslDisable

### DNS
#### Domain
##### dnsDomainZones
##### dnsDomainInfo
##### dnsDomainCheck
##### dnsDomainCreate
##### dnsDomainDelete

#### NS
##### dnsNsInfo
##### dnsNsEdit
##### dnsNsRestore

#### Record
##### dnsRecordInfo
##### dnsRecordCreate
##### dnsRecordEdit
##### dnsRecordRestore
##### dnsRecordMxPredefined
##### dnsRecordDelete

### Billing
##### billingCartOrder
##### billingCartProlong
##### billingCartBuy
##### billingInvoiceInfo 
##### billingInvoicePay
