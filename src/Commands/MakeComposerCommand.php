<?php

namespace LaravelMakeComposer\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeComposerCommand extends GeneratorCommand
{
    /**
     * The name of the console command
     * @var string
     */
    protected $name = 'make:composer';

    /**
     * The console command description
     *
     * @var string
     */
    protected $description = 'Create a new View Composer';

    /**
     * Get the stub for new file
     *
     * @return false|string
     */
    protected function getStub()
    {
        return realpath(__DIR__.'/stubs/composer.stub');
    }

    /**
     * Get the default namespace for new file
     *
     * @param  string  $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . config('make-composer.path');
    }
}
