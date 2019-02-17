<?php

namespace SODRP\Model;

class PlayerModel
{
    /**
     * @var array
     */
    private $player;

    public function __construct(array $player)
    {
        $this->player = $player;
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
     * @return int|null
     */
    public function getNumber(): ?int
    {
        if ($this->player['number'] == null || $this->player['number'] === 0) {
            return null;
        }
        return $this->player['number'];
    }
}
