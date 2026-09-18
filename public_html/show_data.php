<?php

require_once 'pdo_data.php';

// ===============================
// Pagination Setup
// ===============================
$items_per_page = 20;

$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

if ($current_page < 1) {
    $current_page = 1;
}

// ===============================
// Count Total Records
// ===============================
$count_sql = "SELECT COUNT(*) FROM titanic";
$count_stmt = $pdo->query($count_sql);

$total_records = (int) $count_stmt->fetchColumn();

$total_pages = max(1, ceil($total_records / $items_per_page));

// ป้องกันการเรียกหน้าที่เกินจำนวนหน้า
if ($current_page > $total_pages) {
    $current_page = $total_pages;
}

$offset = ($current_page - 1) * $items_per_page;

// ===============================
// Fetch Titanic Data
// ===============================
$sql = "
    SELECT
        `index`,
        PassengerId,
        Survived,
        Pclass,
        Name,
        Sex,
        Age,
        SibSp,
        Parch,
        Ticket,
        Fare,
        Cabin,
        Embarked
    FROM titanic
    LIMIT :limit OFFSET :offset
";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':limit', $items_per_page, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

$stmt->execute();

$passengers = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Titanic Data</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }

        .page-header {
            background: linear-gradient(135deg,
                    #62c8c3,
                    #4f8cff);

            color: white;

            border-radius: 20px;

            padding: 30px;

            margin-bottom: 25px;

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .data-card {
            background: white;

            border-radius: 20px;

            padding: 20px;

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            white-space: nowrap;
        }

        .table tbody td {
            white-space: nowrap;
            vertical-align: middle;
        }

        .status-survived {
            color: #198754;
            font-weight: bold;
        }

        .status-died {
            color: #dc3545;
            font-weight: bold;
        }

        .database-info {
            color: #6c757d;
            font-size: 14px;
        }
    </style>

</head>

<body>

    <div class="container-fluid px-4 py-4">

        <!-- Header -->
        <div class="page-header">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                <div>

                    <h1 class="mb-2">
                        🚢 Titanic Passenger Data
                    </h1>

                    <p class="mb-0">
                        Passenger information from the Titanic dataset
                    </p>

                </div>

                <div class="text-end">

                    <div class="badge bg-light text-dark fs-6 p-2">
                        Database: sample_db
                    </div>

                    <div class="database-info text-white mt-2">
                        Total Records:
                        <strong>
                            <?= number_format($total_records) ?>
                        </strong>
                    </div>

                </div>

            </div>

        </div>


        <!-- Data Table -->
        <div class="data-card">

            <?php if (count($passengers) > 0): ?>

                <div class="table-responsive">

                    <table class="table table-striped table-hover table-bordered">

                        <thead class="table-dark">

                            <tr>

                                <th>Index</th>
                                <th>Passenger ID</th>
                                <th>Survived</th>
                                <th>Pclass</th>
                                <th>Name</th>
                                <th>Sex</th>
                                <th>Age</th>
                                <th>SibSp</th>
                                <th>Parch</th>
                                <th>Ticket</th>
                                <th>Fare</th>
                                <th>Cabin</th>
                                <th>Embarked</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($passengers as $row): ?>

                                <tr>

                                    <td>
                                        <?= htmlspecialchars($row['index'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['PassengerId'] ?? '') ?>
                                    </td>

                                    <td>

                                        <?php if ($row['Survived'] == 1): ?>

                                            <span class="status-survived">
                                                ✓ Survived
                                            </span>

                                        <?php else: ?>

                                            <span class="status-died">
                                                ✕ Did not survive
                                            </span>

                                        <?php endif; ?>

                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Pclass'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Name'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Sex'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Age'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['SibSp'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Parch'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Ticket'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Fare'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Cabin'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($row['Embarked'] ?? '') ?>
                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>


                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-3">

                    <div class="text-muted">

                        Showing

                        <strong>
                            <?= $offset + 1 ?>
                        </strong>

                        -

                        <strong>
                            <?= min($offset + $items_per_page, $total_records) ?>
                        </strong>

                        of

                        <strong>
                            <?= number_format($total_records) ?>
                        </strong>

                        records

                    </div>


                    <nav>

                        <ul class="pagination mb-0">

                            <!-- Previous -->

                            <li class="page-item
                            <?= $current_page <= 1 ? 'disabled' : '' ?>">

                                <a class="page-link" href="?page=<?= $current_page - 1 ?>">
                                    ← Previous
                                </a>

                            </li>


                            <!-- Page Numbers -->

                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>

                                <li class="page-item
                                <?= $i == $current_page ? 'active' : '' ?>">

                                    <a class="page-link" href="?page=<?= $i ?>">
                                        <?= $i ?>
                                    </a>

                                </li>

                            <?php endfor; ?>


                            <!-- Next -->

                            <li class="page-item
                            <?= $current_page >= $total_pages ? 'disabled' : '' ?>">

                                <a class="page-link" href="?page=<?= $current_page + 1 ?>">
                                    Next →
                                </a>

                            </li>

                        </ul>

                    </nav>

                </div>

            <?php else: ?>

                <div class="text-center py-5">

                    <div style="font-size: 50px;">
                        📭
                    </div>

                    <h4 class="mt-3">
                        No records found
                    </h4>

                    <p class="text-muted">
                        The Titanic table does not contain any records.
                    </p>

                </div>

            <?php endif; ?>

        </div>

    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>
