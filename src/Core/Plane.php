<?php

namespace app\Core;

/**
 * Class Plane
 *
 * The cass is responsible for printing the trip details via Plane
 *
*/
class Plane
{
    const MESSAGE = 'From %s take flight %s to %s. %s %s';
	
	protected $departure = null;
	protected $arrival = null;
	protected $transportNo = null;
	protected $seatInfo = null;
	protected $boardingInfo = null;
	
	public function __construct($depart, $transportNo, $arrive, $seatInfo, $boardingInfo)
	{
		$this->departure = $depart;
		$this->transportNo = $transportNo;
		$this->arrival = $arrive;
		$this->seatInfo = $seatInfo;
		$this->boardingInfo = $boardingInfo;
	}

    /**
     * Return message for plane trip
     *
     * @return string
    */
    public function getMessage()
    {
		// Add transportNo, arrival, departure, seat and boarding info to message
        $message = sprintf(static::MESSAGE, $this->departure, $this->transportNo, $this->arrival, $this->seatInfo, $this->boardingInfo); 
		
        return $message;
    }
	
}