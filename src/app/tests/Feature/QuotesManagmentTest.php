<?php

namespace Tests\Feature;

use App\Models\Quotes;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuotesManagmentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Retrieve a list of quotes
     *
     * @test
     */
    public function list_of_quotes_retrieved()
    {
        $this->withExceptionHandling();
        Quotes::factory(3)->make();
        $response = $this->get(route('quotes.index'));

        $response->assertOk();

        $quotes = Quotes::all();

        $response->assertViewIs('quotes.index');
        $response->assertViewHas('quotes', $quotes);
    }
}
