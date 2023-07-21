<?php

$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo "<table>";
echo "<tr>";
echo "<th>Tên khóa học</th>";
foreach($arrs as $item) {
  echo "<td>$item</td>";
}
echo "</tr>";
echo "</table>";
