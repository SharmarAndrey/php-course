<?php

$users = [
    ["name" => "Andrey", "age" => 42, "is_admin" => true],
    ["name" => "Olga", "age" => 30, "is_admin" => false],
    ["name" => "Ivan", "age" => 17, "is_admin" => false],
    ["name" => "Lena", "age" => 65, "is_admin" => true],
];

foreach ($users as $user) {
    echo "Name: " . $user["name"] . " Age: " . $user["age"] . " Role: ".($user["is_admin"] ? "Admin" : "User")."<br>";
    /* if($user['is_admin'] ){
        echo "Name:  $user[name], Age: $user[age], Role: Admin <br>";
    }else{
        echo "Name:  $user[name], Age: $user[age], Role: User <br>";
    } */
}
$sum = 0;
for ($i = 0; $i < count($users); $i++) {
    $sum += $users[$i]['age'];


}
$average = $sum / count($users);
echo "Average age: $average <br>";

echo "Max age: " . max(array_column($users, "age")) . "<br>";
echo "Min age: " . min(array_column($users, "age")) .  "<br>";
