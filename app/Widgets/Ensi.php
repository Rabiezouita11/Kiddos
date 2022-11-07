<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Ensi extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    public $reloadTimeout =1;
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.ensi', [
            'config' => $this->config,
        ]);
    }
}
