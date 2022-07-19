<?php
class MyClass
{

    static $a = "staticvariable";
    const r="constant variable";
    static function Demo()
    {
        echo "this is static function";
    }
}
class NewClass extends MyClass
{
    static $b ="b variable";
    static function Test()
    {
        echo parent::$a;
        echo "<br>";
        echo parent::r;
        echo "<br>";
        echo parent::Demo();
        echo "<br>";
        echo self::$b;
        echo "<br>";
        echo "this is Newclass";
    }
}

// echo MyClass::$a;
// echo MyClass::r;
// MyClass::Demo();

// NewClass::Demo;
NewClass::Test();

?>