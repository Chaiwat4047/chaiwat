<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>66010914047 ไชยวัฒน์ เหล่าหลำ (เจย์)</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container { width: 45%; float: left; margin: 10px; }
        table { width: 100%; margin-bottom: 20px; border-collapse: collapse; }
    </style>
</head>

<body>
    <h1>66010914047 ไชยวัฒน์ เหล่าหลำ (เจย์)</h1>

    <?php
    include_once("connectdb.php");
    $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country`";
    $rs = mysqli_query($conn, $sql);

    $labels = []; // เก็บชื่อประเทศ
    $values = []; // เก็บยอดขาย
    $rows = [];   // เก็บข้อมูลไว้แสดงในตาราง

    while ($data = mysqli_fetch_array($rs)) {
        $labels[] = $data['p_country'];
        $values[] = $data['total'];
        $rows[] = $data;
    }
    ?>

    <table border="1">
        <tr>
            <th>ประเทศ</th>
            <th>ยอดขาย</th>
        </tr>
        <?php foreach ($rows as $row): ?>
        <tr>
            <td><?php echo $row['p_country']; ?></td>
            <td align="right"><?php echo number_format($row['total'], 0); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="chart-container"><canvas id="barChart"></canvas></div>
    <div class="chart-container"><canvas id="pieChart"></canvas></div>

    <script>
        // รับค่าจาก PHP มาเป็น JSON
        const labels = <?php echo json_encode($labels); ?>;
        const dataValues = <?php echo json_encode($values); ?>;

        const config = {
            data: {
                labels: labels,
                datasets: [{
                    label: 'ยอดขายรายประเทศ',
                    data: dataValues,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'],
                }]
            },
            options: { responsive: true }
        };

        // วาด Bar Chart
        new Chart(document.getElementById('barChart'), { ...config, type: 'bar' });
        
        // วาด Pie Chart
        new Chart(document.getElementById('pieChart'), { ...config, type: 'pie' });
    </script>

    <?php mysqli_close($conn); ?>
</body>
</html>