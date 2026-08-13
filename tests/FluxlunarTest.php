<?php
/**
 * Tests for FluxLunar
 */

use PHPUnit\Framework\TestCase;
use Fluxlunar\Fluxlunar;

class FluxlunarTest extends TestCase {
    private Fluxlunar $instance;

    protected function setUp(): void {
        $this->instance = new Fluxlunar(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Fluxlunar::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
