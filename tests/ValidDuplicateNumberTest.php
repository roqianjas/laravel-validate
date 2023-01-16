<?php

namespace Milwad\LaravelValidate\Tests;

use Milwad\LaravelValidate\Rules\ValidDuplicateNumber;

class ValidDuplicateNumberTest extends BaseTest
{
    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test duplicate numbers is valid.
     *
     * @test
     * @return void
     */
    public function duplicate_numbers_is_valid()
    {
        $rules = ['duplicate_number' => [new ValidDuplicateNumber()]];
        $data = ['duplicate_number' => 123456789];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }
}