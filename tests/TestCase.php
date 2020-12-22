<?php

namespace RiftLab\ImmanuelChart\Tests;

class TestCase extends \Lumen\Testbench\TestCase
{
    /**
     * Arbitrary chart details for consistent testing.
     *
     */
    protected $chartDetails = [
        'latitude' => '38.5616505',
        'longitude' => '-121.5829968',
        'birth_date' => '2000-10-30',
        'birth_time' => '05:00',
        'house_system' => 'Polich Page',
    ];

    protected $solarReturnYear = 2025;

    protected $progressionDate = '2021-07-01';

    protected $transitDate = '2021-07-01';

    protected $transitTime = '13:00:00';
}
