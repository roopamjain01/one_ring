<?php

class RegionTest extends SapphireTest {

	/**
	@test
	**/
	public function testgetGridThumbnail() {
 		// $photo = new Image();
 		// $photo->
		$region = new Region();

		// $region->PhotoID = $photo->ID;
		// $region->write();
 		$this->assertEquals("(no image)", $region->getGridThumbnail());
 		$this->assertNotEmpty($region->Photo(), $region->getGridThumbnail());
    }

	/**
	@test
	**/
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

	/**
	@test
	**/
    public function testLink() {
		$region = new Region();
 		$this->assertEquals("/show/0", $region->Link());
 		$region->ID = 1;
 		$this->assertEquals("/show/1", $region->Link());

 		for($i = 2 ; $i<= 5; $i++)
 		{
 			$region->ID = $i;
 			$this->assertEquals("/show/$i", $region->Link());
 		}
    }


    /**
	@test
	**/
    public function testLinkingMode() {
		$region = new Region();
		$this->assertEquals("current", $region->LinkingMode());
		$region->ID = 1;
 		$this->assertEquals("link", $region->LinkingMode());
 		for($i = 2 ; $i<= 4; $i++)
 		{
 			$region->ID = $i;
 			$this->assertEquals("link", $region->LinkingMode());
 		}
 		//$r1 = new RegionsPage_Controller();
 		//$r1->setRequest()->param('ID') = '2';
		//var_dump($r1->getRequest()->param('ID'));
    }

    public function testArticlesLink() {
		$region = new Region();
		$AH = new ArticleHolder();
		$page = $AH::get()->first();
        var_dump($page);
 		//$this->assertEquals(NULL, $region->ArticlesLink());
 		/*$region->ID = 1;
 		$this->assertEquals("/region/1", $region->ArticlesLink());

 		for($i = 2 ; $i<= 5; $i++)
 		{
 			$region->ID = $i;
 			$this->assertEquals("/region/$i", $region->ArticlesLink());
 		}*/
    }

}
