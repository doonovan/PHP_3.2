<?php

// Запрашиваем ввод ФИО
echo "Введите фамилию: ";
$surname = trim(fgets(STDIN));

echo "Введите имя: ";
$name = trim(fgets(STDIN));

echo "Введите отчество: ";
$patronymic = trim(fgets(STDIN));

// Функция для приведения первого символа к верхнему регистру (mb_ucfirst)
function mb_ucfirst($str) {
    return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
}

// Приводим ФИО к правильному формату
$surname = mb_ucfirst(mb_strtolower($surname));
$name = mb_ucfirst(mb_strtolower($name));
$patronymic = mb_ucfirst(mb_strtolower($patronymic));

// Полное имя
$fullName = "$surname $name $patronymic";

// Фамилия и инициалы
$surnameAndInitials = "$surname " . mb_substr($name, 0, 1) . "." . mb_substr($patronymic, 0, 1) . ".";

// Аббревиатура
$fio = mb_substr($surname, 0, 1) . mb_substr($name, 0, 1) . mb_substr($patronymic, 0, 1);

// Вывод результата
echo "Полное имя: '$fullName'\n";
echo "Фамилия и инициалы: '$surnameAndInitials'\n";
echo "Аббревиатура: '$fio'\n";