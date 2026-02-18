<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>Premium Dashboard - 66010914047</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0f172a;
            --glass: rgba(255, 255, 255, 0.03);
            --glass-border: rgba(255, 255, 255, 0.1);
            --accent: #38bdf8;
            --text-main: #f8fafc;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background-color: var(--bg-dark);
            background-image: radial-gradient(circle at 50% -20%, #1e293b, #0f172a);
            color: var(--text-main);
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
        }

        .container { max-width: 1200px; margin: auto; }

        .header { text-align: left; margin-bottom: 40px; border-left: 4px solid var(--accent); padding-left: 20px; }
        .header h1 { margin: 0; font-weight: 600; letter-spacing: 1px; font-size: 1.8rem; }
        .header p { color: #94a3b8; margin: 5px 0 0 0; }

        /* Glassmorphism Card */
        .card {
            background: var(--glass);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 30px;
            transition: transform 0.3s ease;
        }
        .card:hover { border-color: var(--accent); }

        .main-layout { display: grid; grid-template-columns: 1.2fr 2fr; gap: 30px; }

        /* Modern Table */
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; color: #64748b; font-weight: 400; font-size: 0.85rem; text-transform: uppercase; padding-bottom: 15px; }
        td { padding: 15px 0; border-bottom: 1px solid var(--glass-border); font-size: 1rem; }
        .trend-up { color: #4ade80; font-size: 0.8rem; margin-left: 5px; }

        .chart-title { font-size: 1rem; color: #94a3b8; margin-bottom: 20px; display: flex; align-items: center; gap: 10px; }
        .chart-title::before { content: ''; width: 12px; height: 12px; background: var(--accent); border-radius: 50%; display: inline-block; }

        @media (max-width: 900px) { .main-layout { grid-template-columns: 1fr; } }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>SALES ANALYTICS</h1>
        <p>รหัสนิสิต: 66010914047 | ไชยวัฒน์ เหล่าหลำ (เจย์)</p>
    </div>

    <?php
    include_once("connectdb.php");
    $monthNames = [1=>"ม.ค.", 2=>"ก.พ.", 3=>"มี.ค.", 4=>"เม.ย.", 5=>"พ.ค.", 6=>"มิ.ย.", 
                   7=>"ก.ค.", 8=>"ส.ค.", 9=>"ก.ย.", 10=>"ต.ค.", 11=>"พ.ย.", 12=>"ธ.ค."];
    
    $sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month"; 
    $rs = mysqli_query($conn, $sql);

    $labels = []; $values = []; $tableData = [];
    while ($row = mysqli_fetch_array($rs)) {
        $mName = $monthNames[$row['Month']];
        $labels[] = $mName;
        $values[] = $row['Total_Sales'];
        $tableData[] = ['name' => $mName, 'val' => $row['Total_Sales']];
    }
    ?>

    <div class="main-layout">
        <div class="card">
            <div class="chart-title">Data Summary</div>
            <table>
                <thead>
                    <tr>
                        <th>เดือน</th>
                        <th style="text-align: right;">ยอดขายรวม</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tableData as $item): ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td align="right">
                            <span style="font-weight: 600;"><?php echo number_format($item['val'], 0); ?></span>
                            <span class="trend-up">▲</span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="card">
            <div class="chart-title">Sales Performance</div>
            <canvas id="mainChart" height="180"></canvas>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 30px;">
        <div class="card" style="text-align: center;">
            <div class="chart-title">Distribution</div>
            <div style="max-width: 250px; margin: auto;">
                <canvas id="subChart"></canvas>
            </div>
        </div>
        <div class="card" style="display: flex; flex-direction: column; justify-content: center; align-items: center; background: linear-gradient(135deg, #0ea5e9, #6366f1); border: none;">
            <h3 style="margin: 0; font-weight: 200;">ยอดขายรวมทั้งหมด</h3>
            <div style="font-size: 3rem; font-weight: 600;">฿<?php echo number_format(array_sum($values), 0); ?></div>
            <p style="opacity: 0.8;">อัปเดตล่าสุด: <?php echo date('d/m/Y'); ?></p>
        </div>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($values); ?>;

    // กราฟแท่งแบบ Gradient และดีไซน์โค้ง
    const ctxBar = document.getElementById('mainChart').getContext('2d');
    const gradientBar = ctxBar.createLinearGradient(0, 0, 0, 400);
    gradientBar.addColorStop(0, '#38bdf8');
    gradientBar.addColorStop(1, 'rgba(56, 189, 248, 0)');

    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขาย',
                data: dataValues,
                backgroundColor: gradientBar,
                borderColor: '#38bdf8',
                borderWidth: 2,
                borderRadius: 12,
                borderSkipped: false,
            }]
        },
        options: {
            plugins: { legend: { display: false } },
            scales: {
                y: { grid: { color: 'rgba(255,255,255,0.05)' }, ticks: { color: '#64748b' } },
                x: { grid: { display: false }, ticks: { color: '#64748b' } }
            }
        }
    });

    // กราฟวงกลมแบบ Donut (เท่กว่า Pie ปกติ)
    new Chart(document.getElementById('subChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: ['#38bdf8', '#818cf8', '#c084fc', '#fb7185', '#fbbf24', '#34d399'],
                borderWidth: 0,
                hoverOffset: 20
            }]
        },
        options: {
            cutout: '80%',
            plugins: { legend: { display: false } }
        }
    });
</script>

</body>
</html>