<?php
require_once __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
    protected $path;

    protected $data;

    public function __construct($path)
    {
        if (fopen($path, 'r') === false) {
            echo 'ERROR';
            die;
        } else {
            $fh = fopen($path, 'r');
            while (!feof($fh)) {
                $lines = fgets($fh);
                echo "<table border='1'>" .
                    "<tr>" .
                    "<td>" .
                    $lines .
                    "</td>" .
                    "</tr>" .
                    "</table>";
            }
        }
        fclose($fh);
        if (file($path) === false) {
            echo 'ERROR';
            die;
        } else {
            $this->data = file($path);
            $this->path = $path;
        }
    }

//    public function getData(): array
//    {
//        return $this->data;
//    }
//
//    public function append($text): void
//    {
//        $this->data[] = $text;
//    }

    public function save()
    {
        $data2 = implode($this->data);
        $res = fopen($this->path, 'w');
        fwrite($res, $data2);
        fclose($res);
        return $this;
    }
}

