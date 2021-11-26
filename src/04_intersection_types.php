<?php

interface ToString
{
    public function toString();
}

class User implements JsonSerializable
{
    public function __construct()
    {
    }

    public function jsonSerialize(): mixed
    {
        // TODO: Implement jsonSerialize() method.
    }

    public function toString()
    {
    }
}


function toStringWithJSON(ToString&JsonSerializable $user)
{

}

toStringWithJSON(new User());

