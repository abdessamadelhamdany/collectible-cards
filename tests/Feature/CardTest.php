<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CardTest extends TestCase
{
    /** @test */
    public function user_can_create_new_card()
    {
        /*
            Imagine you have collection of items (collectible cards).
            Each card has title, brand name, category, release name, year.

            Each card has configurable exchange conditions based on card properties (brand, category, release, year). No need to create interface for this, just build database to make it possible to have this conditions for each item.
        */
    }
}
