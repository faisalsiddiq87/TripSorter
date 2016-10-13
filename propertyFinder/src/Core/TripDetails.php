<?php

namespace app\Core;

use app\Core\Train;
use app\Core\Bus;
use app\Core\Plane;

/**
 * Class TripDetails
 *
 * The class prints all boarding cards details
 *
*/
class TripDetails
{
    const MESSAGE = 'You have arrived at your final destination. ';
	
	protected $cardDetail = array();
	
	public function __construct($cardDetails)
	{
		$this->cardDetail = $cardDetails;
	}
	
	/**
     * Get cards value
     *
    */
	public function getCards()
	{
		return $this->cardDetail;
	}

    /**
     * Print message for train trip
     *
     * @return string
    */
    public function printTripDetails()
    {
        $cards = $this->getCards();
		foreach ($cards as $card) {
			if ($card['type'] == "Train") {
				$train = new Train($card['transportNo'], $card['source'], $card['destination'], $card['seatInfo']);	
				$msg = $train->getMessage();
				echo $msg.'<br>';
			} else if ($card['type'] == "Plane") {
				$plain = new Plane($card['source'], $card['transportNo'], $card['destination'], $card['seatInfo'], $card['boardingInfo']);
				$msg = $plain->getMessage();
				echo $msg.'<br>';
			} else if ($card['type'] == "Bus") {
				$bus = new Bus($card['source'], $card['destination']);
				$msg = $bus->getMessage();
				echo $msg.'<br>';
			}
		}
		echo static::MESSAGE;
		
		return true;
    }
}