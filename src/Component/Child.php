<?php

namespace App\Component;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Child
{
    use DefaultActionTrait;

    /**
     * @var list<array<string, string>>
     */
    #[LiveProp(writable: true)]
    public array $list;

    public function mount(): void
    {
        $this->list = [0 => ['comment' => 'Test'.rand(1,999)]];
    }
}
