<?php

require __DIR__ . '/show_data.php';
return;

require_once 'pdo_data.php';

$dbStatus = false;
$dbName = 'titanic';
$message = '';

try {
    // ตรวจสอบการเชื่อมต่อฐานข้อมูล
    $stmt = $pdo->query("SELECT DATABASE() AS db_name");
    $result = $stmt->fetch();

    if ($result && $result['db_name'] === $dbName) {
        $dbStatus = true;
        $message = "เชื่อมต่อฐานข้อมูลสำเร็จ";
    }
} catch (PDOException $e) {
    $message = "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
}

?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Database Connection</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, "Segoe UI", sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background:
                radial-gradient(circle at top left, #dff7ff, transparent 35%),
                radial-gradient(circle at bottom right, #d9d6ff, transparent 35%),
                #f5f7fb;

            color: #1f2937;
        }

        .container {
            width: 90%;
            max-width: 650px;
        }

        .card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 24px;

            padding: 45px;

            box-shadow:
                0 20px 50px rgba(31, 41, 55, 0.12);

            text-align: center;
        }

        .icon {
            width: 80px;
            height: 80px;

            margin: 0 auto 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 20px;

            background: linear-gradient(135deg,
                    #62c8c3,
                    #4f8cff);

            color: white;
            font-size: 38px;

            box-shadow: 0 10px 25px rgba(79, 140, 255, 0.25);
        }

        h1 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 30px;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 10px 18px;

            border-radius: 50px;

            font-weight: bold;
            font-size: 14px;

            margin-bottom: 30px;
        }

        .status.success {
            background: #dcfce7;
            color: #15803d;
        }

        .status.error {
            background: #fee2e2;
            color: #dc2626;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: currentColor;
        }

        .info {
            display: grid;
            grid-template-columns: 1fr 1fr;

            gap: 15px;

            margin-top: 10px;
        }

        .info-box {
            padding: 20px;

            background: #f8fafc;

            border: 1px solid #e5e7eb;
            border-radius: 16px;

            text-align: left;
        }

        .label {
            display: block;

            font-size: 13px;
            color: #6b7280;

            margin-bottom: 7px;
        }

        .value {
            font-size: 17px;
            font-weight: bold;
            color: #111827;
        }

        .footer {
            margin-top: 30px;

            font-size: 13px;
            color: #9ca3af;
        }

        @media (max-width: 600px) {

            .card {
                padding: 30px 20px;
            }

            h1 {
                font-size: 25px;
            }

            .info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <main class="container">

        <section class="card">

            <div class="icon">
                🗄️
            </div>

            <h1>Database Connection</h1>

            <p class="subtitle">
                PHP PDO + MariaDB Connection Status
            </p>

            <?php if ($dbStatus): ?>

                <div class="status success">
                    <span class="dot"></span>
                    Connected Successfully
                </div>

            <?php else: ?>

                <div class="status error">
                    <span class="dot"></span>
                    Connection Failed
                </div>

            <?php endif; ?>

            <div class="info">

                <div class="info-box">
                    <span class="label">Database Server</span>
                    <span class="value">MariaDB</span>
                </div>

                <div class="info-box">
                    <span class="label">Database</span>
                    <span class="value">
                        <?= htmlspecialchars($dbName) ?>
                    </span>
                </div>

                <div class="info-box">
                    <span class="label">Connection</span>
                    <span class="value">
                        <?= $dbStatus ? 'PDO' : 'Error' ?>
                    </span>
                </div>

                <div class="info-box">
                    <span class="label">Server Host</span>
                    <span class="value">db</span>
                </div>

            </div>

            <div class="footer">
                <?= htmlspecialchars($message) ?>
            </div>

        </section>

    </main>
</body>

</html>