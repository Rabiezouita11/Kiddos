<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Notfication extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    public $reloadTimeout =2;
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.notfication', [
            'config' => $this->config,
        ]);
    }
}
