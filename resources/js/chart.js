/*************************************************************************
 *
*/

import 'chart.js';

"use strict";

$(".btn-display-modal, .modal .close-modal ").on('click', function () {
    $('.modal').toggleClass('loaded');

    if( $('.modal').hasClass('loaded') ) {
        initChart();
    }

});



function initChart() {
    var url     = '/get-chart-data/';

    axios.get(
        url,
        {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
            // other configuration there
        },)
        .then(function (response) {

            console.log(response);
            new Chart(document.getElementById("myChart"), {
                type: 'pie',
                data: {
                    labels: response.data.labels,
                    datasets: [{
                        label: "Todo Columns",
                        backgroundColor: response.data.datasets.backgroundColor,
                        data: response.data.datasets.data,
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Predicted world population (millions) in 2050'
                    }
                }
            });

        })
        .catch(function (error) {
            alert('oops. Error occurred.');
            console.log(error);
        })
    ;

}
