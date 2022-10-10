<?php

namespace ZenCoreSpA\UI\Tests\Feature;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use ZenCoreSpA\UI\Tests\TestCase;

class ButtonTest extends TestCase
{
    use InteractsWithViews;

    public function test_component()
    {
        $view = $this->blade('<x-ui::button :content="$content" />', [
            'content' => 'Hello World',
        ]);

        $view->assertSee("Hello World");
    }
}