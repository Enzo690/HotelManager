<?php
/**
 * Helper avec les fonctions général
 */

trait Helper
{
    public function error($field) {
        return isset($_SESSION["error"][$field]) ? $_SESSION["error"][$field]: "";
    }
    
    public function old($field) {
        return isset($_SESSION["old"][$field]) ? $_SESSION["old"][$field] : "";
    }
    
    public function escape($data) {
        return stripslashes(trim(htmlspecialchars($data)));
    }
    
    public function slugify(string $str) : string {
        // replace non letter or digits by -
        $str = preg_replace('~[^\pL\d]+~u', '-', $str);
        // transliterate
        $str = iconv('utf-8', 'us-ascii//TRANSLIT', $str);
        // remove unwanted characters
        $str = preg_replace('~[^-\w]+~', '', $str);
        // trim
        $str = trim($str, '-');
        // remove duplicate -
        $str = preg_replace('~-+~', '-', $str);
        // lowercase
        $str = strtolower($str);
        if (empty($str)) {
            return 'n-a';
        }
        return $str;
    }
    
}

