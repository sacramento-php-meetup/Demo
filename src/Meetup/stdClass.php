<?php
namespace Meetup;

class stdClass
{
    public function __toString()
    {
        return "This is a plain old PHP class in the namespace: ".__NAMESPACE__;
    }
}
