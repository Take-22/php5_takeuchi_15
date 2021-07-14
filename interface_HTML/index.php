<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>食糧本部 座席表</title>
</head>

<body>
<!-- Head[Start] -->
    <header>
        <p id="login" class="flex-itme"><a href="login.php">ログイン（個人勤務実績を見る）</a></p>
        <p id="title" class="flex-itme"><a href="index.php">食糧本部 座席表</a></p>
        <p id="today" class="flex-itme"></p>
    </header>
<!-- Head[End] -->

<!-- Main[Start] -->
    <form action="register.php" method="POST">
    <div class="cover">
        <table id="S01" class="tableBorder1">
            <tbody>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-01" type="button" value="Aさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-02" type="button" value="Bさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-03" type="button" value="Cさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-04" type="button" value="Dさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-05" type="button" value="Eさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-06" type="button" value="Fさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-07" type="button" value="Gさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S01-08" type="button" value="Hさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <table id="S02" class="tableBorder1">
            <tbody>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-01" type="button" value="Iさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-02" type="button" value="Jさん" type="submit" />
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-03" type="button" value="Kさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-04" type="button" value="Lさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-05" type="button" value="Mさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-06" type="button" value="Nさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-07" type="button" value="Oさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                    <td class="tbltd">
                        <input class="zaseki color空" id="S02-08" type="button" value="Pさん" type="submit"/>
                        <br><select id="status">
                            <option disabled selected value></option>
                            <option value="出社">出社</option>
                            <option value="在宅">在宅</option>
                            <option value="有給">有給</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </form>
    
    <div style="position:absolute; top:70px; right:100px; width:400px; height:auto;">
        <canvas id="myChart"></canvas>
    </div>
    
    <h1>Next weeks to do</h1>
    <h2>・座席数を実際の数にする</h2>
    <h2>・UI/UXの向上</h2>
    <h2>・入力内容の再確認画面を表示</h2>
    <h2>・何故か日時の月が6月のまま</h2>
    <h2>・</h2>
    <h1>Elements to be implemented</h1>
    <h2>・本部職員全体のその日の出勤ステータスが座席表と共に可視化</h2>
    <h2>・本部／部／チームごとの出社率のビジュアル化（期間をsortして表示も可能）</h2>
    <h2>・グループへのexcel報告をする際のファイルを自動抽出</h2>
    <h2>・上長への始業/終業報告と、今後の在宅／出社の自動承認システム</h2>
    <h2>・e-Timesに登録する際の個人の出勤データレビュー</h2>
    <h2>・</h2>
    <h1><a href="insert.php">SQL register</a></h1>
<!-- Main[End] -->

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/jquery-2.1.3.min.js"></script>
    <!-- js -->
    <script src="./js/datetime.js"></script>

    <script>
    // <block:setup:1>
    const data = {
        labels: [
            'Red',
            'Blue',
            'Yellow'
        ],
        datasets: [{
            label: '出社率',
            data: [300, 50, 100],
            backgroundColor: [
                'rgb(255, 99, 132, 0.25)',
                'rgb(54, 162, 235, 0.25)',
                'rgb(255, 205, 86, 0.25)'
            ],
            borderColor: [
                'rgb(255, 99, 132, 1)',
                'rgb(54, 162, 235, 1)',
                'rgb(255, 205, 86, 1)',
            ],
            borderWidth: 1,
            hoverOffset: 2
        }]
    };

    // </block:setup>
    // <block:config:0>
    const config = {
        type: 'doughnut',
        data: data,
    };
    // </block:config>
    module.exports = {
        actions: [],
        config: config,
    };
    </script>
    <script>
    // === include 'setup' then 'config' above ===
    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
    </script>

</body>
</html>