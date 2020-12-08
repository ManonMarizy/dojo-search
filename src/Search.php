<?php declare(strict_types=1);

final class Search
{
    const DATA = ['Rocky 1', 'Rocky 2', 'My Little Pony', '\w'];

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function search(string $searchString): array
    {
        $results = [];
        $needle = "";
        $searchString = trim($searchString);
        if (!$searchString) {
            return $results;
        }
        $searchString = preg_replace('#([.\\/$*\\\])#', '\\\$1', $searchString);
        $needle = str_replace(" ", ".*", $searchString);
        var_dump($needle);
        foreach (self::DATA as $key => $value) {
            if (preg_match ("/" . $needle . "/i", $value)) {
                $results[] = $value;
            }
        }

        // Your code should be written here
        // return results matching $searchString in self::DATA

        return $results;
    }
}
// strcasecmp ( string $str1 , string $str2 ) : int
// strcasecmp — Comparaison insensible à la casse de chaînes binaires

//[^$]
//addcslashes ( string $string , string $characters ) : string
//addcslashes — Ajoute des slash dans une chaîne, à la mode du langage C
//echo addcslashes('foo[ ]', 'A..z');
// Affiche :  \f\o\o\[ \]
// Toutes les majuscules et minuscules seront échappées
// ... mais aussi les caractères [\]^_`


// $firstRegex = "/[^a-zA-Z0-9]/";
// if (preg_match($firstRegex, $searchString)) {
//            return $results;
//        }
/*
public function search(string $searchString): array
    {
        $results = [];

        $searchString = trim($searchString);
        if (empty($searchString))
            return $results;

        $needle = str_replace(" ", ".*", preg_quote($searchString));
        $needle = str_replace("/", '\/', $needle);
        foreach (self::DATA as $key => $value) {
            if (preg_match ("/" . $needle . "/i", $value)) {
                $results[] = $value;
            }
        }

        return $results;
    }
    */