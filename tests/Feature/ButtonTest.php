<?php

namespace ZenCoreSpA\UI\Tests\Feature;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use ZenCoreSpA\UI\Tests\TestCase;

class ButtonTest extends TestCase
{
    use InteractsWithViews;

    public function test_component()
    {
        $view = $this->blade('<x-ui::button type="button">{{ $content }}</x-ui::button>', [
            'content' => 'Hello World',
        ]);

        $view->assertSee("Hello World")
            ->assertSee('type="button"', false);
    }

    public function test_submit()
    {
        $view = $this->blade('<x-ui::button type="submit">{{ $content }}</x-ui::button>', [
            'content' => 'Hello World',
        ]);

        $view->assertSee('type="submit"', false);
    }

    public function test_button()
    {
        $view = $this->blade('<x-ui::button type="button">{{ $content }}</x-ui::button>', [
            'content' => 'Hello World',
        ]);

        $view->assertSee('type="button"', false);
    }
}
