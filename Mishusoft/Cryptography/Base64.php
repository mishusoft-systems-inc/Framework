<?php declare(strict_types=1);


namespace Mishusoft\Cryptography;

class Base64
{


    public static function encode(string $data): string
    {
        return rtrim(
            strtr(base64_encode($data), '+/', '-_'),
            '='
        );
    }//end encode()
    /**
     * @return bool|string
     */
    public static function decode(string $data)
    {
        return base64_decode(
            str_pad(
                strtr($data, '-_', '+/'),
                (strlen($data) % 4),
                '=',
                STR_PAD_RIGHT
            )
        );
    }//end decode()
    /**
     * @return bool|string
     */
    public static function justEncode(string $string)
    {
        return base64_encode($string);
    }//end justEncode()
    /**
     * @return bool|string
     */
    public static function justDecode(string $string)
    {
        return base64_decode($string);
    }//end justDecode()
}//end class
