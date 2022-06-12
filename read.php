<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

</head>
<body>
<header>
    <div class = "title">
		<h1>⚽ 結果集計 ⚽</h1>
	</div>
</header>

<!-- 以下、アンケート結果の表記述 -->
<div class = container>
<table border =1>
    <tr>
        <th>日時</th>
        <th>予想者</th>
        <th>日本</th>
        <th>優勝</th>
    </tr>

    <?php
    $fileName = "data/data.txt";
    $file = fopen($fileName, "r");

        while (!feof($file)){
            $str = fgets($file);
            
            if( !empty($str) ) {
                $arr = explode(",", $str);

                echo "<tr>";
                foreach ($arr as $v){
                    echo "<td>".$v."</td>";
                }
                echo "</tr>";
            }   

        };

    fclose($file);

    ?>

</table>
</div>


<!-- 以下、表のグラフ化記述-->

<div class="container">
    <div style = "width :600px;">
        <canvas id="myChart"></canvas>
        <button type="button" id="btn">グラフを更新</button>
    </div>
</div>



<script>

let ctx = document.getElementById('myChart').getContext('2d');
const chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'pie',    // The data for our dataset
    data: {
        labels: ["dammy0", "dammy1", "dammy2", "dammy3", "dammy4", "dammy5", "dammy6"],
        datasets: [{
            label: "",
            backgroundColor:[
                "#fff7fb",
                "#ece2f0",
                "#d0d1e6",
                "#a6bddb",
                "#67a9cf",
                "#3690c0"
            ],
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },    // Configuration options go here
    options: {
        legend: {
        display: false, // 凡例を非表示
      }
    }
});

</script>


</body>
</html>
