<?php
/**
 * BookingPage (MODX Snippet)
 * - Hardcoded LOCAL DB credentials
 * - Reads booking form POST -> session
 * - Shows booking summary
 * - Lists vehicles from `vehicles` table
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* =========================
   LOCAL DB CREDENTIALS
   ========================= */
$dbHost = 'localhost';
$dbName = 'platinum-ch';
$dbUser = 'root';   // created via SQL above
$dbPass = '';
$dbPort = 3306;
$dbCharset = 'utf8mb4';

/* =========================
   HELPERS
   ========================= */
$e = function ($v) {
    return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
};

/* =========================
   CONNECT (PDO)
   ========================= */
$dsn = "mysql:host={$dbHost};port={$dbPort};dbname={$dbName};charset={$dbCharset}";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $ex) {
    // show the real error while debugging
    return '<div class="alert alert-danger">DB connect error: ' . $e($ex->getMessage()) . '</div>';
}

/* =========================
   FORM DATA -> SESSION
   ========================= */
$fields = [
    'service_type',
    'pickup_location',
    'dropoff_location',
    'pickup_date',
    'pickup_time',
    'dropoff_date',
    'dropoff_time',
];

$booking = [];

if (!empty($_POST)) {
    foreach ($fields as $f) {
        $booking[$f] = isset($_POST[$f]) ? trim((string)$_POST[$f]) : '';
    }
    $_SESSION['booking'] = $booking;
} else {
    $booking = $_SESSION['booking'] ?? [];
}

foreach ($fields as $f) {
    if (!isset($booking[$f])) $booking[$f] = '';
}

$serviceLabel = ($booking['service_type'] === 'transfer') ? 'Transfers' : 'Rent A Car';

/* =========================
   VEHICLES QUERY
   ========================= */
$vehiclesTable = 'vehicles'; // change if your table name differs (e.g. modx_vehicles)

$filterSql = '';
$params = [];

/* Optional filter if vehicles has column `service_type`
if (!empty($booking['service_type'])) {
    $filterSql = " WHERE service_type = :service_type ";
    $params[':service_type'] = $booking['service_type'];
}
*/

$sql = "SELECT * FROM {$vehiclesTable} {$filterSql} ORDER BY id DESC";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $vehicles = $stmt->fetchAll();
} catch (PDOException $ex) {
    return '<div class="alert alert-danger">Vehicle query error: ' . $e($ex->getMessage()) . '</div>';
}

/* =========================
   SELECT VEHICLE -> SESSION
   ========================= */
if (isset($_GET['vehicle_id'])) {
    $_SESSION['booking_vehicle_id'] = (int)$_GET['vehicle_id'];
}

/* =========================
   VEHICLES HTML
   ========================= */
$vehiclesHtml = '';

if (!empty($vehicles)) {
    foreach ($vehicles as $v) {
        $vehicleId = (int)($v['id'] ?? 0);
        $name  = $e($v['name'] ?? $v['title'] ?? 'Vehicle');
        $price = $e($v['price_per_day'] ?? $v['price'] ?? '');
        $image = $e($v['image'] ?? '');
        $type  = $e($v['type'] ?? $v['category'] ?? '');

        $selectUrl = $modx->makeUrl($modx->resource->get('id'), '', [
            'vehicle_id' => $vehicleId
        ], 'full');

        $vehiclesHtml .= '
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            ' . ($image ? '<img src="' . $image . '" class="card-img-top" alt="' . $name . '">' : '') . '
            <div class="card-body">
              <h5 class="card-title">' . $name . '</h5>
              ' . ($type ? '<div><strong>Type:</strong> ' . $type . '</div>' : '') . '
              ' . ($price !== '' ? '<div><strong>Price:</strong> ' . $price . '</div>' : '') . '
            </div>
            <div class="card-footer bg-white">
              <a class="btn btn-primary w-100" href="' . $selectUrl . '">Select this vehicle</a>
            </div>
          </div>
        </div>';
    }
} else {
    $vehiclesHtml = '<div class="col-12"><div class="alert alert-warning">No vehicles found.</div></div>';
}

/* =========================
   OUTPUT
   ========================= */
$out = '
<div class="container my-5">
  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="p-4 bg-light rounded">
        <h4 class="mb-3">Booking Details</h4>
        <div><strong>Service Type:</strong> ' . $e($serviceLabel) . '</div>
        <hr>
        <div><strong>Pick-up:</strong> ' . $e($booking['pickup_location']) . '</div>
        <div><strong>Pick-up Date/Time:</strong> ' . $e($booking['pickup_date']) . ' ' . $e($booking['pickup_time']) . '</div>
        <hr>
        <div><strong>Drop-off:</strong> ' . $e($booking['dropoff_location']) . '</div>
        <div><strong>Drop-off Date/Time:</strong> ' . $e($booking['dropoff_date']) . ' ' . $e($booking['dropoff_time']) . '</div>
        ' . (!empty($_SESSION['booking_vehicle_id'])
            ? '<hr><div><strong>Selected Vehicle ID:</strong> ' . (int)$_SESSION['booking_vehicle_id'] . '</div>'
            : ''
        ) . '
      </div>
    </div>

    <div class="col-lg-8">
      <h3 class="mb-4">Available Vehicles</h3>
      <div class="row">
        ' . $vehiclesHtml . '
      </div>
    </div>
  </div>
</div>';

return $out;