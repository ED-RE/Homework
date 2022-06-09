<?php

namespace Exceptions;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

class DBException extends \Exception
{
    protected $sql;

    public function __construct($sql, string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        $this->sql = $sql;
        parent::__construct($message, $code, $previous);
    }

    public function getSql()
    {
        return $this->sql;
    }
}

