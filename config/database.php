<?php
declare(strict_types=1);

final class Database
{
    private static ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (self::$connection instanceof PDO) {
            return self::$connection;
        }

        $dsn = getenv(DB_ENV_PREFIX . 'DB_DSN') ?: DB_DEFAULT_DSN;
        $username = getenv(DB_ENV_PREFIX . 'DB_USER') ?: DB_DEFAULT_USER;
        $password = getenv(DB_ENV_PREFIX . 'DB_PASSWORD') ?: DB_DEFAULT_PASSWORD;

        if ($dsn === '') {
            throw new RuntimeException('Database DSN is not configured.');
        }

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            self::$connection = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $exception) {
            throw new RuntimeException('Unable to connect to the database.', 0, $exception);
        }

        return self::$connection;
    }
}
