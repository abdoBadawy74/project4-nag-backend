<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
<<<<<<< HEAD
use Illuminate\Foundation\Application;
=======
>>>>>>> dc80b6761200e8a3323631deb39ebdfefb5cd718

trait CreatesApplication
{
    /**
     * Creates the application.
<<<<<<< HEAD
     */
    public function createApplication(): Application
=======
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
>>>>>>> dc80b6761200e8a3323631deb39ebdfefb5cd718
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
