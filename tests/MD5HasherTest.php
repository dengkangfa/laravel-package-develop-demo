<?php

use PHPUnit\Framework\TestCase;

class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new Dengkangfa\Hasher\MD5Hasher();
    }

    public function testMD5HasherMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');
        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherMakeWithouSalt()
    {
        $password = md5('passworddkf');
        $passwordTwo = $this->hasher->make('password', ['salt' => 'dkf']);
        $this->assertEquals($password, $passwordTwo);
    }

    public function testMD5HasherCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password', $password);
        $this->assertTrue($passwordCheck);
    }
}