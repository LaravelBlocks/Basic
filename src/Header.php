<?php

namespace LaravelBlocks\Basic;

use LaravelBlocks\Core\Content;
use Illuminate\Support\Facades\View;

class Header extends Content
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'block_headers';

    /**
     * Get the rendered output of the block.
     *
     * @return mixed
     */
    public function render()
    {
        switch ($this->size) {
            case 1:
                $viewName = 'laravelblocks::headers.one';
                break;
            case 2:
                $viewName = 'laravelblocks::headers.two';
                break;
            case 3:
                $viewName = 'laravelblocks::headers.three';
                break;
            case 4:
                $viewName = 'laravelblocks::headers.four';
                break;
            case 5:
                $viewName = 'laravelblocks::headers.five';
                break;
            case 6:
                $viewName = 'laravelblocks::headers.six';
                break;
            default:
                $viewName = 'laravelblocks::headers.one';
                break;
        }

        return View::make($viewName, ['text' => $this->text]);
    }
}
