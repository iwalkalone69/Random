<?php

namespace iwalkalone;

class Random
{
    /**
     * Generate a random string.
     *
     * @param int $length
     *
     * @return string
     */
    public static function generate($length = 8, $type = 'Aan')
    {
        switch ($type) {
            case 'n':
                $chars = '0123456789';
                break;
            case 'A':
                $chars = 'ABCDEFGHIJKLMNPQRSTUVWXYZ';
                break;
            case 'a':
                $chars = 'abcdefghijklmnopqrstuvwxyz';
                break;
            case 'An':
                $chars = 'ABCDEFGHJKLMNPQRSTWXYZ23456789';
                break;
            case 'an':
                $chars = 'abcdefghjklmnpqrstwxyz23456789';
                break;
            case 'Aan':
	    default:
                $chars = 'ABCDEFGHJKLMNPQRSTWXYZabcdefghjklmnpqrstwxyz23456789';
                break;
        }

        while (strlen($chars) < $length) {
            $chars .= $chars;
        }

        return substr(str_shuffle($chars), 0, $length);
    }
}
