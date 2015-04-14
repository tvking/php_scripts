<?php

final class ValidateConfig
{
	function construct() {
	}

    public function validate($config, $requiredKeys) {
        $this->traverseKeys($config, $requiredKeys);
    }

    private function traverseKeys($config, $requiredKeys) {
        foreach($requiredKeys as $key) {
            #if the value is a string it must be a key. We need to 
            #check the config for this key and see if it is a none empty string
            
            if (is_scalar($key)) {
                echo $key;
                $this->checkNonEmptyString($config[$key]);
            } elseif (is_array($key)) {
                #if the value is an array we need to traverse it looking for string keys
                $keys = $key[1];
                $this->traverseKeys($config[$key[0]], $keys);
            }
        }
        return;
    }

    private function checkNonEmptyString($str) {
        if (!is_string($str)) {
            echo " Not a string " . var_dump($str, true) . "\n";
            return;
        }

        if (empty($str)) {
            echo " Empty string.\n";
            return;
        }

        echo " A valid string $str.\n";
        return;
    }

}
