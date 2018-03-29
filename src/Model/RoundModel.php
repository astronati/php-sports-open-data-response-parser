<?php

namespace SODRP\Model;

class RoundModel
{
    /**
     * @var array
     */
    private $round;

    public function __construct(array $round)
    {
        $this->round = $round;
    }

    /**
     * Returns the start date of the first match of the current round as ISO DateTime following format
     * 2018-02-14T00:00:00+02:00
     * @return string
     */
    public function getFirstMatchDate(): string
    {
        return $this->round['start_date'];
    }

    /**
     * Returns the start date of the last match of the current round as ISO DateTime following format
     * 2018-02-14T00:00:00+02:00
     * @return string
     */
    public function getLastMatchDate(): string
    {
        return $this->round['end_date'];
    }

    /**
     * Returns the number of the current round.
     * @return int
     */
    public function getNumber(): int
    {
        return (int) str_replace('Round ', '', $this->round['name']);
    }
}
