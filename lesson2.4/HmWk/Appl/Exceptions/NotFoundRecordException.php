<?php

namespace Exceptions;

class NotFoundRecordException extends \Exception
{
    public function getError404()
    {
        return 'Ошибка 404 - не найдено';
    }
}
