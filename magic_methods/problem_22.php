<?php

/*
Problem 22: The Dynamic Settings Registry (__get & __set)
Scenario: You are building a configuration manager for a website. 
Instead of creating hardcoded properties for every single setting (like site_name, maintenance_mode, etc.),
you want a flexible system that allows developers to dynamically read and write settings from an internal array, while preventing them from adding invalid data.

Task: Create a Settings class.

The Magic Methods:

__set($key, $value): Triggered when trying to write to an undefined property. 
It should store the key/value pair inside a private array called $registry.

__get($key): Triggered when trying to read an undefined property. 
It should check if the key exists in the $registry array and return it. If it doesn't exist, return "Setting not found".

Challenge: Instantiate the class, set $settings->theme = "dark", 
and then echo $settings->theme without actually creating a public $theme property.
*/


class Settings {
    private $registry = [];

    public function __set($key, $value) {
        $this->registry[$key] =  $value;
    }


    public function __get($key) {
        if(isset($this->registry[$key])) {
            return $this->registry[$key];
        }

        return "Setting not found";
    }

}

$setting = new Settings();

$setting->theme = "dark";

echo $setting->theme;