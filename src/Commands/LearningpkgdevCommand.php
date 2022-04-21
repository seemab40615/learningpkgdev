<?php

namespace Seemab40615\Learningpkgdev\Commands;

use Illuminate\Console\Command;

class LearningpkgdevCommand extends Command
{
    public $signature = 'learningpkgdev';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
