<?php

namespace Waygou\WebCommand\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class WebCommandController extends Controller
{
    public function execute(Request $request)
    {
          // Run Artisan command.
        $exitCode = Artisan::call('webcommand:run', [
            'line' => $request->input('command')
        ]);

        return view('webcommand::form')->with('response', Artisan::output())
                                       ->with('command', $request->input('command'));
    }
}
