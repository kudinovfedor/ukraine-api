<?php

namespace KudinovFedor\AdmTools;

/**
 * Class AbstractAdmTools
 *
 * @package KudinovFedor\AdmTools
 */
abstract class AbstractAdmTools implements AdmToolsInterface
{
    /**
     * API address
     *
     * @var string
     */
    protected $base_uri;

    /**
     * Login account (auth_login field)
     *
     * @var string
     */
    protected $login;

    /**
     * API access token (auth_token field)
     *
     * @var string
     */
    protected $token;

    /**
     * Response format (json or xml)
     *
     * @var string
     */
    protected $format;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * AbstractAdmTools constructor.
     * @param string $login - api account login
     * @param string $token - api access token
     * @param string $base_uri - api base address
     * @param string $format - response format (json or xml)
     */
    public function __construct(
        string $login,
        string $token,
        string $base_uri = 'https://adm.tools/api.php',
        string $format = 'json'
    ) {
        $this->login = $login;
        $this->token = $token;
        $this->base_uri = $base_uri;
        $this->format = strtolower($format);

        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->getBaseUri()
        ]);
    }

    /**
     * Get API address
     *
     * @return string
     */
    public function getBaseUri(): string
    {
        return $this->base_uri;
    }

    /**
     * Get login account
     *
     * @return string
     */
    protected function getLogin(): string
    {
        return $this->login;
    }

    /**
     * Get API access token
     *
     * @return string
     */
    protected function getToken(): string
    {
        return $this->token;
    }

    /**
     * Response format
     *
     * @return string
     */
    protected function getFormat(): string
    {
        return $this->format;
    }

    /**
     * Get Guzzle Client
     *
     * @return \GuzzleHttp\Client
     */
    protected function getClient(): \GuzzleHttp\Client
    {
        return $this->client;
    }

    /**
     * Execute Request
     *
     * @param Request\AbstractRequest $request
     * @return mixed|\SimpleXMLElement|string
     */
    abstract protected function execute(Request\AbstractRequest $request);

    /**
     * Send POST request
     *
     * @param array $options
     * @return mixed|\SimpleXMLElement
     * @throws \Exception
     */
    abstract protected function sendRequest(array $options = []);
}
