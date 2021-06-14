<?php
declare(strict_types=1);

namespace Hanhan1978\OpenCv;

class Camera {

    private \FFI $ffi;

    public function __construct()
    {
        $this->ffi = \FFI::cdef( "extern int snapshot(const char* s);", __DIR__ . "/lib/camera.so");
    }

    public function snapshot(string $fileName)
    {
        $this->ffi->snapshot($fileName);
    }

}
