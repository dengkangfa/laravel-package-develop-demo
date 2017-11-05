<?php

namespace Dengkangfa\Hasher;

/**
 * Class MD5Hasher
 * @package Dengkangfa\Hasher
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return bool
     */
    public function make($value, array $options = []) : string
    {
        $salt = $options['salt'] ?? '';

        return hash('md5', $value . $salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options = []) : bool
    {
        $salt = $options['salt'] ?? '';

        return hash('md5', $value . $salt) === $hashValue;
    }
}