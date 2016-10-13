<?php

namespace tests;

use app\Core\Parser;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class ParserTest
 *
 * The class tests the json file parsing functionality
 *
*/
class ParserTest extends \PHPUnit_Framework_TestCase
{
    protected $parser;
	
    protected $jsonFile = ROOT;
	
    /**
     * setup the test and load main parser class
     *
    */
    public function setUp()
    {
        $this->jsonFile .= 'data/sampleData.json';
        $this->parser = new Parser($this->jsonFile);
    }
	
    /**
     * convert json string to array and check if its array
     *
    */
    public function testParseJson()
    {
        $data = $this->parser->parseJson();
        $this->assertTrue(is_array($data));
    }
}
