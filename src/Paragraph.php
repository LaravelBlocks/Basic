<?php

namespace LaravelBlocks\Basic;

use LaravelBlocks\Core\Content;
use Illuminate\Support\Facades\View;

class Paragraph extends Content
{
    /**
     * The fields that should be exposed for editing.
     *
     * @var array
     */
    public $fields = [
        'text' => 'text',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'block_paragraphs';

    /**
     * Get the rendered output of the block.
     *
     * @return mixed
     */
    public function render()
    {
        return View::make('laravelblocks::paragraph', ['text' => $this->text]);
    }
}
