<?php

namespace tests;

use app\Core\Parser;
use app\Core\SortCards;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class SorterTest
 *
 * The class tests the array sorting functionality
 *
*/
class SorterTest extends \PHPUnit_Framework_TestCase
{
    protected $parser;
	
    protected $jsonFile = ROOT;
	
	protected $sortedArrayFromJSONFile;
	
	protected $sorter;
	
	 protected $expectedTripCollection = array(
	 
        array(
            'source' => 'Madrid',
            'destination' => 'Barcelona',          
        ),
        array(
            'source' => 'Barcelona',
            'destination' => 'Gerona Airport',
        ),
        array(
            'source' => 'Gerona Airport',
            'destination' => 'Stockholm',       
        ),
		array(
            'source' => 'Stockholm',
            'destination' => 'New York JFK',          
        )
		
    );
	
    /**
     * setup the test and load main parser and sort cards classes
     *
    */
    public function setUp()
    {
        $this->jsonFile .= 'data/sampleData.json';
        $this->parser = new Parser($this->jsonFile);
		$this->sorter = new SortCards($this->parser->parseJson());
		
    }
	
    /**
     * sort the cards array and validate the output by the sorted array
     *
    */
    public function testSortAllCards()
    {
        $this->sortedArrayFromJSONFile = $this->sorter->sortAllCards();
		
        $this->assertTrue($this->matchSortedArray($this->expectedTripCollection, $this->sortedArrayFromJSONFile));
    }
	
    /**
     * validate the sorted array with actual array to see if its sorted correctly
     *
    */
	private function matchSortedArray($expectedArr, $sortedArr)
    {
		$sort = true;
        foreach ($sortedArr as $key => $sorted){
            if ($sorted['source'] != $expectedArr[$key]['source'] ) {
               $sort = false;
			}
		}
        return $sort;
    }
}
