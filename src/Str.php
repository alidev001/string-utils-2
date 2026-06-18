<?php

namespace QueraCollege\stringUtils;

class Str
{
    /**
     * @return false
     */
    public static function contains($haystack, $needles): bool
    {
        foreach ((array)$needles as $needle) {

            if ($needle !== '' and mb_strpos($haystack, $needle) !== false) {

                return true;

            }


        }
        return false;
    }

    public  static  function containsall($haystack,array $needles ): bool
    {
    foreach ($needles as $needle){

        if(!static::contains($haystack, $needle)){
            return true;
        }
    }
    return  true;
    }

}









