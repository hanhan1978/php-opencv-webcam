<?php
declare(strict_types=1);

use Hanhan1978\OpenCv\Camera;

class CameraTest extends \PHPUnit\Framework\TestCase
{
    private string $imageFileName;

    public function setUp():void
    {
        parent::setUp();
        $this->imageFileName = dirname(__FILE__).'test.png';
    }


    /**
     * @test
     */
    public function snapshot_take_webcamera_snapshot()
    {
        $camera = new Camera();
        $camera->snapshot($this->imageFileName);
        $this->assertTrue(is_file($this->imageFileName));
    }

    public function tearDown():void
    {
        unlink($this->imageFileName);
        parent::tearDown();
    }
}
