<?php
//Объявления функций сортировки по параметру
	function sorting_name ($a, $b) {
		if ($a['name'] == $b['name']) return 0;
		else return $a['name'] > $b['name'] ? 1 : -1;
	}
	function sorting_number ($a, $b) {
		if ($a['number'] == $b['number']) return 0;
		else return $a['number'] > $b['number'] ? 1 : -1;
	}
	function sorting_height ($a, $b) {
		if ($a['parametres']['height'] == $b['parametres']['height']) return 0;
		else return $a['parametres']['height'] > $b['parametres']['height'] ? 1 : -1;
	}
	function sorting_weight ($a, $b) {
		if ($a['parametres']['weight'] == $b['parametres']['weight']) return 0;
		else return $a['parametres']['weight'] > $b['parametres']['weight'] ? 1 : -1;
	}
//Объявление функции печати
	function printing ($for_print) {
			foreach ($for_print as $key => $value) {
				if ($key <5) {
					foreach ($value as $key1 => $value1) {
						if ($key1 !== 'parametres') {
							echo $value1 . ' ';
						}
						else {
							echo '( ';
							foreach ($value1 as $key2 => $value2) {
								echo $value2. ' ';
							}
							echo ')';
						}
					}	
					echo '<br/>';
				}
			}	
	}
//Заданный массив
	$basketball_team = [
		$player_1 = [
			'name' => 'Ник Янг',
			'number' => 0,
			'position' => 'Атакующий защитник',
			'parametres' => $antro = [ 
								'height' => '201 см',
								'weight' => '95 кг'
							]
		],
		$player_2 = [
			'name' => 'Д’Анджело Расселл',
			'number' => 1,
			'position' => 'Разыгрывающий защитник',
			'parametres' => $antro = [ 
								'height' => '196 см',
								'weight' => '88 кг'
							]
		],
		$player_3 = [
			'name' => 'Кори Брюэр',
			'number' => 3,
			'position' => 'Легкий форвард',
			'parametres' => $antro = [ 
								'height' => '206 см',
								'weight' => '84 кг'
							]
		],
		$player_4 = [
			'name' => 'Хосе Кальдерон',
			'number' => 5,
			'position' => 'Разыгрывающий защитник',
			'parametres' => $antro = [ 
								'height' => '190 см',
								'weight' => '90 кг'
							]
		],
		$player_5 = [
			'name' => 'Джордан Кларксон',
			'number' => 6,
			'position' => 'Атакующий защитник',
			'parametres' => $antro = [ 
								'height' => '196 см',
								'weight' => '87 кг'
							]
		],
		$player_6 = [
			'name' => 'Ларри Нэнс-младший',
			'number' => 7,
			'position' => 'Тяжелый форвард',
			'parametres' => $antro = [ 
								'height' => '206 см',
								'weight' => '104 кг'
							]
		],
		$player_7 = [
			'name' => 'Луол Денг',
			'number' => 9,
			'position' => 'Легкий форвард',
			'parametres' => $antro = [ 
								'height' => '206 см',
								'weight' => '99 кг'
							]
		],
		$player_8 = [
			'name' => 'Тайлер Эннис',
			'number' => 11,
			'position' => 'Разыгрывающий защитник',
			'parametres' => $antro = [ 
								'height' => '190 см',
								'weight' => '87 кг'
							]
		],
		$player_9 = [
			'name' => 'Брэндон Ингрэм',
			'number' => 14,
			'position' => 'Легкий форвард',
			'parametres' => $antro = [ 
								'height' => '206 см',
								'weight' => '86 кг'
							]
		],
	];
//Вывод всех игроков в введенном порядке
	echo '<strong>Игроки не сортированы: </strong><br/>';
	printing($basketball_team);
	echo '<hr/>';
//Сортировка Игроков по имени. Вывод:
	usort($basketball_team, 'sorting_name');
	echo '<strong>Игроки  сортированы по имени: </strong><br/>';
	printing($basketball_team);
	echo '<hr/>';
//Сортировка Игроков по номеру. Вывод:
	usort($basketball_team, 'sorting_number');
	echo '<strong>Игроки  сортированы по номеру: </strong><br/>';
	printing($basketball_team);
	echo '<hr/>';
//Сортировка Игроков по росту. Вывод:
	usort($basketball_team, 'sorting_height');
	echo '<strong>Игроки  сортированы по росту: </strong><br/>';
	printing($basketball_team);
	echo '<hr/>';
//Сортировка Игроков по весу. Вывод:
	usort($basketball_team, 'sorting_weight');
	echo '<strong>Игроки  сортированы по весу: </strong><br/>';
	printing($basketball_team);
	echo '<hr/>';