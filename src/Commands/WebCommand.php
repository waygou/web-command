<?php

namespace Waygou\WebCommand\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class WebCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'webcommand:run {line}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs a console command via Laravel.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info($this->commandExecute($this->argument('line')));
        $this->info('');
    }

    protected function commandExecute($command)
    {
        $process = new Process($command);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            return((new ProcessFailedException($process))->getMessage());
        }

        return $process->getOutput();
    }
}
