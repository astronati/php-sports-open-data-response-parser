<?php

namespace SODRP\Model;

class PlayerModel
{
    /**
     * @var array
     */
    private $footballer;

    public function __construct(array $footballer)
    {
        $this->player = $footballer;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->player['fullname'];
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->player['name'];
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->player['number'];
    }
}
