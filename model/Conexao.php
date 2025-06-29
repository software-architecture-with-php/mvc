<?php
require_once __DIR__ . '/../config/env.php';
carregarEnv();

class Conexao {
    private static $instancia = null;

    public static function getConexao() {
        if (self::$instancia === null) {
            try {
                $tipo = getenv('DB_CONNECTION');
                $host = getenv('DB_HOST');
                $dbname = getenv('DB_NAME');
                $usuario = getenv('DB_USER');
                $senha = getenv('DB_PASS');

                $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
                self::$instancia = new PDO($dsn, $usuario, $senha);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
            }
        }

        return self::$instancia;
    }
}
