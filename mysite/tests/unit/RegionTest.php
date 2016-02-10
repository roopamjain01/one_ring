<?php

class RegionTest extends SapphireTest {

    public function testgetCMSFields() {
    	$region = new Region();
		$fields = $region->getCMSFields();

		//Fiels array should not be empty
		$this->assertNotEmpty($fields);

		//Check total field
        $this->assertEquals(3, count($fields));
        $this->assertCount(3,$fields);

		// Check basic field exists
		$this->assertNotEmpty($fields->dataFieldByName('Description'));
		$this->assertNotEmpty($fields->dataFieldByName('Title'));
		$this->assertNotEmpty($fields->dataFieldByName('Photo'));
    }

 	public function testgetGridThumbnail() {
 		// $photo = new Image();
 		// $photo->
		$region = new Region();
		// $region->PhotoID = $photo->ID;
		// $region->write();
 		$this->assertEquals("(no image)", $region->getGridThumbnail());
 		$this->assertNotEmpty($region->Photo(), $region->getGridThumbnail());
    }

}
