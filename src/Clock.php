<?php

namespace Lcobucci\Clock;

use DateTimeImmutable;

interface Clock
{
    /**
     * @return DateTimeImmutable
     */
    public function now();
}
