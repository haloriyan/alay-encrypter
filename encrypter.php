<?php
class alay {
	public function lib() {
		$hash = array(
			0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9,
			"a" => "4",
			"b" => "8",
			"c" => "(",
			"d" => "@",
			"e" => "3",
			"f" => "f",
			"g" => "9",
			"h" => "|-|",
			"i" => "1",
			"j" => "j",
			"k" => "|<",
			"l" => "|",
			"m" => "|\/|",
			"n" => "|\|",
			"o" => "0",
			"p" => "p",
			"q" => "Q",
			"r" => "12",
			"s" => "5",
			"t" => "7",
			"u" => "!_!",
			"v" => "v",
			"w" => "w",
			"x" => "X",
			"y" => "y",
			"z" => "Z"
		);
		return $hash;
	}
	public function encrypt($word) {
		/*
		$s = str_split($word);
		foreach ($s as $value) {
			$r[] = $this->lib()[$value];
		}
		return implode($r);
		*/
		$word = strtolower($word);
		$p = explode(" ", $word);
		foreach ($p as $key => $value) {
			$s = str_split($value);
			foreach ($s as $key => $value) {
				$r[] = $this->lib()[$value];
			}
			$return = implode($r);
		}
		return $return;
	}
}