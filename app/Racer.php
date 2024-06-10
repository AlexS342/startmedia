<?php

namespace app;

class Racer
{
    private array $attempt = [];
    private ?int $sum = 0;
    private int $dataSort = 0;

    public function __construct(
        private int    $id,
        private string $name,
        private string $city,
        private string $car,
    )
    {
    }

    /**
     * Статический метод для сортировки по умолчанию (по сумме баллов, большее количество в начало)
     * @param Racer $a
     * @param Racer $b
     * @return int
     */
    static function sort(Racer $a, Racer $b): int
    {
        if ($a->dataSort == $b->dataSort) {
            return 0;
        }
        return ($a->dataSort < $b->dataSort) ? 1 : -1;
    }

    /**
     * Возвращает ID участника соревнований
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Возвращает имя участника соревнований
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Возвращает город участника соревнований
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Возвращает марку машины участника соревнований
     * @return string
     */
    public function getCar(): string
    {
        return $this->car;
    }

    /**
     * Возвращает массив с результатами заездов участника
     * @return array
     */
    public function getAttempt(): array
    {
        return $this->attempt;
    }

    /**
     * Добавляет результаты заездов и считает их сумму
     * @param array $attempt - результат заезда
     */
    public function setAttempt(array $attempt): void
    {
        $this->attempt = $attempt;
        $this->setSum();
    }

    /**
     * Возвращает сумму балов за все заезды
     * @return int
     */
    public function getSum(): int
    {
        return $this->sum;
    }

    /**
     * Устанавливает сумму баллов за все заезды
     */
    public function setSum(): void
    {
        $this->sum = array_sum($this->attempt);
    }

    /**
     * @param int $data
     */
    public function setDataSort($data)
    {
        $this->dataSort = $data;
    }

}