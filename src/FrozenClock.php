<?php

namespace Lcobucci\Clock;

use DateTimeImmutable;

final class FrozenClock implements Clock
{
    /**
     * @var DateTimeImmutable
     */
    private $now;

    public function __construct(DateTimeImmutable $now)
    {
        $this->now = $now;
    }

    public function now()
    {
        return $this->now;
    }
}
