 <?php
    $my_array = [
        1 => 'Ukraine',
        2 => 'USA',
        3 => 'Canada',
        4 => 'Germany',
        5 => 'Japan'
    ];
    echo "<pre>";
    print_r($my_array);
    echo "</pre>";
//ассоциативные массивы
    $capitals = [
        'Ukraine' => "Kiev",
        'USA' => 'Washington',
        'Canada' => 'Toronro',
        'Germany' => 'Berlin',
        'Japan' => 'Tokio'
    ];
 echo "<pre>";
 print_r($capitals);
 echo "</pre>";
 //Многомерные массивы
    $book1 = [
        'style' => 'приключения',
        'author' => 'Грегори робертс',
        'name' => 'Шантарам',
        'prise' => 106
    ];
    $book2 = [
        'style' => 'исторический роман',
        'author' => 'Виктор Гюго',
        'name' => 'Отверженные',
        'prise' => 349
    ];
    $book3 = [
        'style' => 'детектив',
        'author' => 'Стиг Ларсона',
        'name' => 'Девушка с татуировкой дракона',
        'prise' => 159
    ];
    $book_list = array($book1, $book2, $book3);
    echo "<pre>";
    print_r($book_list);
    echo "</pre>";