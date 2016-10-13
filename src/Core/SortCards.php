<?php

namespace app\Core;

/**
 * Class SortCards
 *
 * The Class is responsible for sorting boarding cards array from source to destination
 *
*/
class SortCards
{
	protected $cards = null;
	
	public function __construct($cards)
	{
		$this->cards = $cards;
	}
	
	/**
	 * Set cards value
	 *
	*/
	public function setCards($cards)
	{
		$this->cards = $cards;
	}
	
	/**
	 * Get cards value
	 *
	*/
	public function getCards()
	{
		return $this->cards;
	}
	
	/**
	 * Sort all the boarding cards from source to destination
	 *
	 * @return array
	*/
	public function sortAllCards() 
	{
		$arr = $this->cards;	

		for ($i=0;$i<count($arr);$i++) {
			$destination = $arr[$i]['destination'];
			for ($j=0;$j<count($arr);$j++) {
				$diff =  $i-$j;
				if ($destination == $arr[$j]['source']) {
					if(!isset($arr[$i+1]))
						$arr[] = null;
					$temp = $arr[$i+1];
					$arr[$i+1] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}
		
		$this->setCards($arr);
		$this->removeEmptyArrayElements();
		$this->reIndexArrayElements();
		
		return $this->getCards();	
	}
	
	/**
	 * Remove all the empty arrays created while sorting
	 *
	 * @return array
	*/
	public function removeEmptyArrayElements() 
	{
		$this->cards = array_filter($this->getCards());
	}
	
	/**
	 * Reindex the sorted arraya after empty arrays removal
	 *
	 * @return array
	*/
	public function reIndexArrayElements() 
	{
		$this->cards = array_values($this->getCards());
	}

}
