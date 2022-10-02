<?php
class Concept {
    private $client;

    public function __construct() {
        $this->client = new \GuzzleHttp\Client();
    }

    public function getUserData() {
        $params = [
            'auth' => ['user', 'pass'],
            'token' => $this->getSecretKey()
        ];

        $request = new \Request('GET', 'https://api.method', $params);
        $promise = $this->client->sendAsync($request)->then(function ($response) {
            $result = $response->getBody();
        });

        $promise->wait();
        $somecontent = "Добавить это к файлу\n";

      if (is_writable( $this)) {
    if (!$fp = fopen($this, 'a')) {
         echo "Не могу открыть файл ($this)";
         exit;
    }

    if (fwrite($fp, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл ($this)";
        exit;
    }

    echo "Ура! Записали ($somecontent) в файл ($this)";

    fclose($fp);

    } else {
       echo "Файл $filename недоступен для записи";
}
    }
