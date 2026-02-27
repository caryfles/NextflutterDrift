<?php
/**
 * Tests for NextflutterDrift
 */

use PHPUnit\Framework\TestCase;
use Nextflutterdrift\Nextflutterdrift;

class NextflutterdriftTest extends TestCase {
    private Nextflutterdrift $instance;

    protected function setUp(): void {
        $this->instance = new Nextflutterdrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nextflutterdrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
