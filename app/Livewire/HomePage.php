<?php

namespace App\Livewire;

use App\Events\EmojiClicked;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('live social mood')]
class HomePage extends Component
{

    /**
     * Recive user's selected emoji to broadcast
     * 
     * @param string $emoji
     * 
     * @return void
     */
    public function broadcast(string $emoji): void
    {
        event(new EmojiClicked($emoji));
    }
}
