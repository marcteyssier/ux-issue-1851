<?php

namespace App\Component;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Child
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    /**
     * @var [string, string]
     */
    public array $list = [];

    public function mount() {
        $this->list[] = ['comment' => 'test'];
    }
}
