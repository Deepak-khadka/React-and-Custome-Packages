<?php

namespace Neputer\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CustomeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deepak:name {module} {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
      $this->Check();

    }

    public function Check()
    {
        $switch1 = strtolower($this->argument('module'));
        $switch2 = strtolower($this->argument('role'));

        switch ($switch1) {
            /**
             * if Module is Selected then
             */
            case('module'):

                if (!file_exists('Neputer/' . ucfirst($switch2) . '/Controller')) {
                    mkdir(base_path('Neputer/' . ucfirst($switch2) . ''));
                    mkdir(base_path('Neputer/' . ucfirst($switch2) . '/Controller'));
                    mkdir(base_path('Neputer/' . ucfirst($switch2) . '/Model'));
                    mkdir(base_path('Neputer/' . ucfirst($switch2) . '/View'));
                    $this->info('Module of ' . ucfirst($switch2) . ' Created Successfully. [ Model, View, Controller ] ');
                }
                else {
                           $this->error(ucfirst($switch2) . ' Module Already Created !!!');
                   }

                break;
            case('controller'):

                if (file_exists('Neputer/' . ucfirst($switch2) . '/Controller/' . ucfirst($switch2) . 'Controller.php')) {

                    $this->error(ucfirst($switch2) . ' Controller Already Created !!!');
                }
                else {

                    $controller = file_get_contents(base_path('Neputer/Foundation/Mixing/controller.create.stub'));
                    $controller = str_replace(["{{ Controller }}","{{ Model }}"], ucfirst($switch2), $controller);
                    File::put(base_path('Neputer/' . ucfirst($switch2) . '/Controller/' . ucfirst($switch2) . 'Controller.php'), $controller);
                    $this->info(ucfirst($switch2) . 'Controller Created .');

                     }

                break;

            case('model'):

                if (file_exists('Neputer/' . ucfirst($switch2) . '/Model/' . ucfirst($switch2) . '.php')) {

                    $this->error(ucfirst($switch2) . ' Module Already Created !!!');

                }
                else {

                    $model = file_get_contents(base_path('Neputer/Foundation/Mixing/model.create.stub'));
                    $model = str_replace("{{ Model }}", ucfirst($switch2), $model);
                    File::put(base_path('Neputer/' . ucfirst($switch2) . '/Model/' . ucfirst($switch2) . '.php'), $model);
                    $this->info(ucfirst($switch2) . ' Model created .');

                }
                break;
        }
    }
}
