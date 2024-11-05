<?php
declare(strict_types=1);


class PasswordGenerator{
    static function generatePassword(int $length = 12):string{
        $uppercase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase='abcdefghijklmnopqrstuvwxyz';
        $numbers='123456789';
        $specialChars = '!@#$%^&*()';
        $allChars= $uppercase . $lowercase . $numbers . $specialChars;
        $password='';
        $password.= $uppercase[mt_rand(0,strlen($uppercase)-1)];
        $password.= $lowercase[mt_rand(0,strlen($lowercase)-1)];
        $password.= $numbers[mt_rand(0,strlen($numbers)-1)];
        $password.= $specialChars[mt_rand(0,strlen($specialChars)-1)];
        for ($i=4; $i <$length ; $i++) { 
            $password.=$allChars[mt_rand(0,strlen($allChars)-1)];
        }
        return str_shuffle($password);
    }
    static function isStrongPassword(string $password):bool{
        return (
            preg_match('/[A-Z]/',$password)&&
            preg_match('/[a-z]/',$password)&&
            preg_match('/[0-9]/',$password)&&
            preg_match('/[!@#$%^&*()]/',$password)
        );
    }
}


$password = PasswordGenerator::generatePassword(25);
$testPassword=PasswordGenerator::isStrongPassword($password);
var_dump($password);
var_dump($testPassword);
