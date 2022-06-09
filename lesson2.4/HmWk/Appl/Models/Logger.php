<?php

namespace Models;

use Exceptions\NotFoundRecordException;

class Logger
{
    protected $logs;

    /**
     * @param string $errors
     * @return void
     * @throws \Exception
     */
    public function setLogsOnTxt(string $errors)
    {
        $date = new \DateTime();
        $logs = $date->format('Y-m-d H:i:s') . " " . $errors . "\n";
        $this->logs = $logs;
        if ((file_put_contents(__DIR__ . '/../logs.txt', $logs, FILE_APPEND)) === false) {
            throw new \Exception('Ошибка записи логгов в logs.txt');
        }
    }
}
