<?php  return '// VehiclesCategoryList: horizontal scroll cards from DB "vehicles"

$tpl   = $modx->getOption(\'tpl\', $scriptProperties, \'VehicleCategoryCardTpl\');
$limit = (int)$modx->getOption(\'limit\', $scriptProperties, 20);
$table = $modx->getOption(\'table\', $scriptProperties, \'vehicles\');
$groupBy = (int)$modx->getOption(\'groupByCategory\', $scriptProperties, 1);
$priceCol = $modx->getOption(\'priceCol\', $scriptProperties, \'\'); // \'\' disables

$select = "image, car_category, pax_count, luggage_count";
$select .= ($priceCol !== \'\') ? ", {$priceCol} AS price" : ", \'\' AS price";

if ($groupBy) {
  $sql = "SELECT v1.*
          FROM {$table} v1
          INNER JOIN (
            SELECT car_category, MAX(id) AS max_id
            FROM {$table}
            GROUP BY car_category
          ) v2 ON v1.id = v2.max_id
          ORDER BY v1.car_category ASC
          LIMIT :limit";
} else {
  $sql = "SELECT {$select}
          FROM {$table}
          ORDER BY id DESC
          LIMIT :limit";
}

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare vehicles query.</p>\';

$stmt->bindValue(\':limit\', $limit, PDO::PARAM_INT);
if (!$stmt->execute()) return \'<p>Could not load vehicles.</p>\';

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (!$rows) return \'<p>No vehicles found.</p>\';

// Unique id so multiple lists on same page won\'t conflict
$uid = \'vehRow_\' . substr(md5(uniqid(\'\', true)), 0, 8);

$out  = \'<div class="vehicleScroller" data-scroller="\'.$uid.\'">\';
$out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--left" type="button" aria-label="Scroll left" data-dir="-1">‹</button>\';
$out .= \'  <div class="vehicleRow" id="\'.$uid.\'">\';

foreach ($rows as $row) {
  $ph = [
    \'image\'         => $row[\'image\'] ?? \'\',
    \'car_category\'  => $row[\'car_category\'] ?? \'\',
    \'pax_count\'     => (int)($row[\'pax_count\'] ?? 0),
    \'luggage_count\' => (int)($row[\'luggage_count\'] ?? 0),
    \'price\'         => $row[\'price\'] ?? \'\',
  ];
  $out .= $modx->getChunk($tpl, $ph);
}

$out .= \'  </div>\';
$out .= \'  <button class="vehicleScroller__btn vehicleScroller__btn--right" type="button" aria-label="Scroll right" data-dir="1">›</button>\';
$out .= \'</div>\';

return $out;
return;
';