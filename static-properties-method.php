<?php


class Person {
    public static $PersonName;
    public static $PersonAge;


    public static function PersonIdentity($name,$age)
    {
        self::$PersonName = $name;
        self::$PersonAge = $age;

        echo "The person name is " . self::$PersonName . "and age " . self::$PersonAge . "<br>";
    }
}

Person::PersonIdentity('John Doe','20');