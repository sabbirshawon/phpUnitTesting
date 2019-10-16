<?php
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    
    /** @test */
    public function empty_instantiated_collection_returns_no_items()
    {
        
        $collection = new \App\Support\Collection;

        $this->assertEmpty($collection->get());

    }


    /** @test */
    public function count_is_correct_for_items_passed_in()
    {
        
        $collection = new \App\Support\Collection([
            'one', 'two', 'three'
        ]);

        $this->assertEquals(3, $collection->count());

    }
}
