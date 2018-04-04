<?php

namespace KudinovFedor\AdmTools\Request;

/**
 * Class AbstractRequest
 * @package KudinovFedor\AdmTools\Request
 */
abstract class AbstractRequest
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    private $exclude = [
        'auth_login',
        'auth_token',
        'class',
        'method',
    ];

    /**
     * AbstractRequest constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $this->filterExclude($options);
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param array $arr
     * @return array
     */
    protected function filterExclude(array $arr): array
    {
        return array_filter($arr, function ($key) {
            return !in_array($key, $this->exclude);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * @param array $arr
     * @return array
     */
    protected function filterEmpty(array $arr): array
    {
        return array_filter($arr, function ($value) {
            return $value !== null;
        });
    }
}
