<?php
    $itemsXml = simplexml_load_file('xml/items.xml');
    foreach ($itemsXml->item as $item) {
        echo '<li>';
        echo '<strong>' . $item->nombre . '</strong> - Precio: $' . $item->precio . ' - Stock:' . $item->stock;
        echo '</li>';
    }
?>