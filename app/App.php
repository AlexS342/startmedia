<?php

namespace app;

class App
{
    private string $jsonRacers = 'data_cars.json';
    private string $jsonAttempts = 'data_attempts.json';

    public function run()
    {
        $arrRacers = $this->readJson($this->jsonRacers);
        $arrAttempts = $this->readJson($this->jsonAttempts);

        $dataAttempts = [];
        foreach ($arrAttempts as $item) {
            $dataAttempts[$item['id']][] = $item['result'];
        }

        $racers = [];
        foreach ($arrRacers as $item) {
            $racers[$item['id']] = new Racer(... $item);
            $racers[$item['id']]->setAttempt($dataAttempts[$item['id']]);

            if (array_key_exists('sort', $_GET) && array_key_exists('item', $_GET) && $_GET['sort'] === 'attempt') {
                $racers[$item['id']]->setDataSort($racers[$item['id']]->getAttempt()[$_GET['item']]);
            } else {
                $racers[$item['id']]->setDataSort($racers[$item['id']]->getSum());
            }
        }

        usort($racers, [Racer::class, "sort"]);

        include './view/results.php';
    }

    /**
     * По имени файла JSON читает его данные и возвращает массив
     * @param $name - имя файла JSON
     * @return array - массив полученный из json
     */
    private function readJson($name): array
    {
        $json = file_get_contents('./data/' . $name);
        return json_decode($json, true);
    }


}