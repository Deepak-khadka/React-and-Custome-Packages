<?php


namespace Neputer\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use Neputer\Command\CustomeCommand;

class NeputerProviderServiceProvider extends ServiceProvider
{
   public function register()
   {

   }

    public function boot()
    {
        $this->commands(CustomeCommand::class);
        $this->loadRoutesFrom(base_path('Neputer/route.php'));
   }
}
