<?php
namespace DaganVendor\AnimalComponent;

class Dog
{
    static protected $_self;
    public $color;
    public $mood;

    static public function getInstance()
    {
        if (!isset(self::$_self)){
        self::$_self = new self('happy', 'gray');
        }
        return self::$_self;
        }

        public function bark()
        {
            switch ($this->mood) {
            case 'angry':
            return "RUFF!";
            break;
            case 'happy':
            return 'bow wow!';
        }
    }

    public function __construct($mood, $color)
    {
        $this->color = $color;
        $this->mood = $mood;
    }

}
