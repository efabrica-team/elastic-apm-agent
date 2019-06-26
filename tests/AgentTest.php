<?php

declare(strict_types=1);

namespace Efabrica\Tests;

use PHPUnit\Framework\TestCase;
use Efabrica\Translatte\Agent;

class AgentTest extends TestCase
{
    public function testNew(): void
    {
        $this->assertSame(Agent::class, get_class(new Agent()));
    }
}
