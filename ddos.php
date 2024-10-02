<?php
function ddos_protection() {
    // Проверяем, используется ли POST-запрос
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Добавляем небольшую задержку, например, 1 секунду
        sleep(1);
    }
}
add_action('init', 'ddos_protection');
?>
