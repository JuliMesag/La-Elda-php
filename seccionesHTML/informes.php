<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="/chart.min.js"></script>



    <title>Document</title>
</head>

<body>

    <?php include '../includes/templates/header.php' ?>

    <div class="grid">

        <?php include '../includes/templates/secciones.php' ?>

        <div class="p-4">
            <div>
                <h2>Informes del mes:</h2>
                <canvas id="myChart"></canvas>
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


                <script>
                    const labels = [
                        'Enero',
                        'Febrero',
                        'Marzo',
                        'Abril',
                        'Mayo',
                        'Junio',
                        'Julio',
                        'Agosto',
                        'Septiembre',
                        'Octubre',
                        'Noviembre',
                        'Diciembre',
                    ];

                    const data = {
                        labels: labels,
                        datasets: [{
                            label: 'Ganancias del mes',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [0, 500000, 200000, 350000, 600000, 580000, 690000, 630000, 500000, 580000, 620000, 850000],
                        }]
                    };

                    const config = {
                        type: 'line',
                        data: data,
                        options: {}
                    };
                </script>


                <script>
                    const myChart = new Chart(
                        document.getElementById('myChart'),
                        config
                    );
                </script>

            </div>
        </div>



    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="/js/graficos.js"></script>
</body>

</html>