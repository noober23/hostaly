// chart torta
function reportesTorta() {
    $.ajax({
        url: base + "Admin/reportesTorta",
        type: 'POST',
        success: function (response) {
            var data = JSON.parse(response);
            var producto = [];
            var total = [];
            for (var i = 0; i < data.length; i++) {
                producto.push(data[i]['producto']);
                total.push(data[i]['total']);
            }
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';

            // Pie Chart Example
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: producto,
                    datasets: [{
                        data: total,
                        backgroundColor: [
                            'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'crimson', 'teal', 'fuchsia', 'lime'
                        ]
                    }],
                },
            });
        }
    })
}

//function count clientes
