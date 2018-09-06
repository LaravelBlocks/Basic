<?php

namespace LaravelBlocks\Basic;

use LaravelBlocks\Core\Content;
use Illuminate\Support\Facades\View;

class Image extends Content
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'block_images';

    /**
     * Get the rendered output of the block.
     *
     * @return mixed
     */
    public function render()
    {
        return View::make('laravelblocks::image', ['alt' => $this->alt, 'src' => $this->src]);
    }
}
