<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_passwordhash
 *
 * @author Sigit Suryono
 */
class Passwordhash {

    function getTimeCost() {
        $timeTarget = 0.05; // 50 milliseconds 
        $cost = 8;
//        echo random_string('md5', 5);
        do {
            $cost++;
            $start = microtime(true);
            password_hash(random_string("md5", 5), PASSWORD_BCRYPT, ["cost" => $cost]);
            $end = microtime(true);
        } while (($end - $start) < $timeTarget);

        return $cost;
    }

    function plainToHash($plainText) {
        return password_hash($plainText, PASSWORD_BCRYPT, ["cost" => $this->getTimeCost()]);
    }

    function checkHashIsValid($password, $hash) {
        return password_verify($password, $hash);
    }

}
