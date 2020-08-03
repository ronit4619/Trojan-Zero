function copyInvite(){
    let copyText = document.getElementById("invite-code");

    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    document.execCommand("copy");

    alert("Copied the invite code: " + copyText.value);
}

/*global $, document*/
$(document).ready(function () {

    'use strict';

    Chart.defaults.global.defaultFontColor = '#75787c';

    // ------------------------------------------------------- //
    // Detections
    // ------------------------------------------------------ //
    var HOMEANALYTICS   = $('#homeAnalytics');
    var homeAnalyticsExample = new Chart(HOMEANALYTICS, {
        type: 'line',
        options: {
            legend: {labels:{fontColor:"#777", fontSize: 12}},
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        color: 'transparent'
                    }
                }],
                yAxes: [{
                    ticks: {
                        max: 60,
                        min: 0
                    },
                    display: true,
                    gridLines: {
                        color: 'transparent'
                    }
                }]
            },
        },
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Warning Detections",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(134, 77, 217, 0.88)",
                    borderColor: "rgba(134, 77, 217, 088)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderColor: "rgba(134, 77, 217, 0.88)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [0, 20, 17, 40, 30, 22, 30],
                    spanGaps: false
                },
                {
                    label: "Resolved Detections",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "rgba(98, 98, 98, 0.5)",
                    borderColor: "rgba(98, 98, 98, 0.5)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "rgba(98, 98, 98, 0.5)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(98, 98, 98, 0.5)",
                    pointHoverBorderColor: "rgba(98, 98, 98, 0.5)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [0, 30, 22, 20, 35, 25, 50],
                    spanGaps: false
                }
            ]
        }
    });

});
