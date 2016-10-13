<?php

namespace app\Core;

/**
 * Class Train
 *
 * The Class is responsible for printing the trip details via Train
 *
*/
class Train
{
    const MESSAGE = 'Take train %s from %s to %s. ';
    const MESSAGE_SEAT_ASSIGNMENT = 'Sit in seat %s.';
	
	protected $departure = null;
	protected $arrival = null;
	protected $transportNo = null;
	protected $seatInfo = null;
	protected $boardingInfo = null;
	
	public function __construct($transportNo, $depart, $arrive, $seatInfo)
	{
		$this->departure = $depart;
		$this->transportNo = $transportNo;
		$this->arrival = $arrive;
		$this->seatInfo = $seatInfo;
	}

    /**
     * Return message for train trip
     *
     * @return string
    */
    public function getMessage()
    {
		// Add seat, arrival and departure info to message
		$message = sprintf(static::MESSAGE, $this->transportNo, $this->departure, $this->arrival); 
		// Add seat info to message
		$message = sprintf($message . static::MESSAGE_SEAT_ASSIGNMENT, $this->seatInfo);

		return $message;
    }
}
