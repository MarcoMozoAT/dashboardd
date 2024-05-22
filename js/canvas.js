document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("myChart").getContext("2d");
    var data = {
        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo"],
        datasets: [
            {
                label: "Ingresos Online",
                data: [12, 19, 3, 5, 2],
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderColor: "rgba(75, 192, 192, 1)",
                borderWidth: 1,
            },
        ],
    };

    // Configuración de la gráfica
    var options = {
        animation: {
            onComplete: function () {
                console.log("Animación completa");
            },
        },
    };

    // Crea la instancia de la gráfica
    var myChart = new Chart(ctx, {
        type: "line",
        data: data,
        options: options,
    });


    function generateRandomData() {
        var data = [];
        var labels = ["Atlixco", "Reforma", "Toluca", "Cholula", "Tepeaca"];

        for (var i = 0; i < labels.length; i++) {
            data.push(Math.floor(Math.random() * 100) + 1);
        }
        return {
            labels: labels,
            data: data,
        };
    }

    var ctx = document.getElementById("recentCustomersChart").getContext("2d");

    function updateChart() {
        var newData = generateRandomData();
        recentCustomersChart.data.labels = newData.labels;
        recentCustomersChart.data.datasets[0].data = newData.data;
        recentCustomersChart.update();
    }

    var initialData = generateRandomData();

    var options = {
        animation: {
            onComplete: function (animation) {
                console.log("Animación completa");
            },
        },
    };

    var recentCustomersChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: initialData.labels,
            datasets: [
                {
                    data: initialData.data,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.6)",
                        "rgba(54, 162, 235, 0.6)",
                        "rgba(255, 206, 86, 0.6)",
                        "rgba(75, 192, 192, 0.6)",
                        "rgba(153, 102, 255, 0.6)",
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                    ],
                    borderWidth: 1,
                },
            ],
        },
        options: options,
    });

    setInterval(updateChart, 2000);
});