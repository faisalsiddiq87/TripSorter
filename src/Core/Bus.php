<?php

namespace app\Core;

/**
 * Class Bus
 *
 * The class is responsible for printing the trip details via Bus
 *
*/
class Bus
{
    const MESSAGE = 'Take the airport bus from %s to %s.';
    const MESSAGE_NO_SEAT_ASSIGNMENT = ' No seat assignment.';
	
	protected $departure = null;
	protected $arrival = null;
	
	public function __construct($depart, $arrive)
	{
		$this->departure = $depart;
		$this->arrival = $arrive;
	}

    /**
     * Return message for bus trip
     *
     * @return string
    */
    public function getMessage()
    {
		// Add arrival, departure info to message
        $message = sprintf(static::MESSAGE , $this->departure, $this->arrival); 
        $message .= static::MESSAGE_NO_SEAT_ASSIGNMENT;
		
        return $message;
    }
}