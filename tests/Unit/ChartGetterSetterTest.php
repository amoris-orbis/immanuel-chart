<?php

use DMS\PHPUnitExtensions\ArraySubset\ArraySubsetAsserts;
use Sunlight\ImmanuelChart\Tests\TestCase;
use Sunlight\ImmanuelChart\Facades\Chart;

class ChartGetterSetterTest extends TestCase
{
    use ArraySubsetAsserts;

    /**
     * Test the Chart class's getter.
     *
     * @return void
     */
    public function testGetter()
    {
        $chart = Chart::create($this->chartDetails);

        foreach ($this->chartDetails as $key => $value) {
            $this->assertEquals($chart->$key, $value);
        }
    }

    public function testGetterFails()
    {
        $chart = Chart::create($this->chartDetails);
        $this->assertNull($chart->nonexistent);
    }

    /**
     * Test the Chart class's setter.
     *
     * @return void
     */
    public function testSetter()
    {
        $chart = Chart::create($this->chartDetails);
        $chart->birth_date = '2000-04-30';
        $natalChartData = $chart->getNatalChart();
        $this->assertArraySubset([
            'planets' => [
                'sun' => [
                    'planet' => 'Sun',
                    'sign' => 'Taurus',
                ],
            ],
        ], $natalChartData);
    }
}
