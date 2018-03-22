<?php
namespace App\Model;
/**
 * Description of BancoDeDados
 *
 * @author Guilherme
 */
class Bd {
    public static $instancia;

    private function __construct() {
//       'mysql:dbname=phpconfbr;host=localhost';
    }

    public static function connectDb() {

        $b = getenv("BANCO");
        $h = getenv("HOST");
        $u = getenv("USUARIO");
        $s = getenv("SENHA");

        if (self::$instancia === NULL) {
            $dsn = 'mysql:dbname=' . $b . ';host=' . $h;
            self::$instancia = new \PDO($dsn, $u, $s);
        }
        return self::$instancia;
    }
}