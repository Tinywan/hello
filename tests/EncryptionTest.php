<?php
/**
 * @desc EncryptionTest
 * @author Tinywan(ShaoBo Wan)
 * @email 756684177@qq.com
 * @date 2023/12/29 23:46
 */

declare(strict_types=1);

class EncryptionTest extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $data = '开源技术小栈';
        $key = '53vYPpTJIR1aYFiFh0PppZzF';

        /** 加密*/
        $encrypt = \tinywan\hello\Encryption::encrypt($data, $key);
        self::assertIsString($encrypt);

        /** 解密*/
        $decrypt = \tinywan\hello\Encryption::decrypt($encrypt, $key);

        // 判断解密明文是否和预期的相等
        self::assertNotEquals($decrypt, $data);
    }
}