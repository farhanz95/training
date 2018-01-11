<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

/* in command type php artisan inspire */

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('saiful', function() {
	echo "Saiful Power";
});

Artisan::command('kill:em:all', function(){
	$this->call('config:clear');
	$this->call('cache:clear');
	$this->call('route:clear');
});
