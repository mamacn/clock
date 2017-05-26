<?php

namespace Lcobucci\Clock;

use DateTimeImmutable;
use DateTimeZone;

final class SystemClock implements Clock
{
    /**
     * @var DateTimeZone
     */
    private $timezone;

    public function __construct(DateTimeZone $timezone = null)
    {
        $this->timezone = $timezone ?: new DateTimeZone(date_default_timezone_get());
    }

    public function now()
    {
        return new DateTimeImmutable('now', $this->timezone);
    }
}
