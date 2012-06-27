<?php

class CubosNicomaco {
	public function calculaCubo($number)
	{
		if($number == 1)
			return 1;

		return array_sum($this->getSumandos($number));
	}

	private function getPrimerSumando($number)
	{
		return $number*($number-1) + 1;
	}

	private function getSumandos($number)
	{
		$primerSumando = $this->getPrimerSumando($number);

		$sumandos = array();
		
		for($i = 0; $i < $number; $i++)
		{
			$sumandos[] = $primerSumando + $i * 2;
		}

		return $sumandos;
	}
}

?>