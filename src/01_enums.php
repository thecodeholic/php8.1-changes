<?php

interface MyInterface{
    public static function hello();
}
trait MyTrait{}
enum UserStatus: int implements MyInterface
{
    use MyTrait;
    case Active = 1;
    case Pending = 2;
    case Deleted = 3;

    public const ARCHIVED = self::Deleted;

    public function text()
    {
        return match($this) {
            self::Active => 'User is active',
            self::Pending => 'User is pending',
            self::Deleted => 'User is deleted',
        };
    }

    public static function staticMethod()
    {
        return "Hello from static";
    }

    public static function hello()
    {
        return "hello from interface";
    }
}

echo '<pre>';
var_dump(UserStatus::Pending->hello());
echo '</pre>';

echo '<pre>';
var_dump(UserStatus::hello());
echo '</pre>';

echo '<pre>';
var_dump(UserStatus::cases());
echo '</pre>';;

