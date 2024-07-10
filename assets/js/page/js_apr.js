"use strict";

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
                label: 'Kas Masuk',
                data: [
                    3200, 1800, 4305, 3022, 6310, 5120, 5880, 5000000
                ],
                borderWidth: 2,
                backgroundColor: 'rgba(63,82,227,.8)',
                borderWidth: 0,
                borderColor: 'transparent',
                pointBorderWidth: 0,
                pointRadius: 3.5,
                pointBackgroundColor: 'transparent',
                pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
            },
            {
                label: 'Kas Keluar',
                data: [2207, 3403, 2200, 5025, 2302, 4208, 3880, 4880],
                borderWidth: 2,
                backgroundColor: 'rgba(254,86,83,.7)',
                borderWidth: 0,
                borderColor: 'transparent',
                pointBorderWidth: 0,
                pointRadius: 3.5,
                pointBackgroundColor: 'transparent',
                pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
            }
        ]
    },
    options: {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                gridLines: {
                    // display: false,
                    drawBorder: false,
                    color: '#f2f2f2',
                },
                ticks: {
                    beginAtZero: true,
                    stepSize: 0,
                    callback: function(value, index, values) {
                        return 'Rp.' + value;
                    }
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                    tickMarkLength: 15,
                }
            }]
        },
    }
});

var balance_chart = document.getElementById("balance-chart").getContext('2d');

var balance_chart_bg_color = balance_chart.createLinearGradient(0, 0, 0, 70);
balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

var myChart = new Chart(balance_chart, {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Balance',
            data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50, 91, 63, 51, 60],
            backgroundColor: balance_chart_bg_color,
            borderWidth: 3,
            borderColor: 'rgba(63,82,227,1)',
            pointBorderWidth: 0,
            pointBorderColor: 'transparent',
            pointRadius: 3,
            pointBackgroundColor: 'transparent',
            pointHoverBackgroundColor: 'rgba(63,82,227,1)',
        }]
    },
    options: {
        layout: {
            padding: {
                bottom: -1,
                left: -1
            }
        },
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                    beginAtZero: true,
                    display: false
                }
            }],
            xAxes: [{
                gridLines: {
                    drawBorder: false,
                    display: false,
                },
                ticks: {
                    display: false
                }
            }]
        },
    }
});

var sales_chart = document.getElementById("sales-chart").getContext('2d');

var sales_chart_bg_color = sales_chart.createLinearGradient(0, 0, 0, 80);
balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

var myChart = new Chart(sales_chart, {
    type: 'line',
    data: {
        labels: [],
        datasets: [{
            label: 'Sales',
            data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50, 91, 63, 51, 60],
            borderWidth: 2,
            backgroundColor: balance_chart_bg_color,
            borderWidth: 3,
            borderColor: 'rgba(63,82,227,1)',
            pointBorderWidth: 0,
            pointBorderColor: 'transparent',
            pointRadius: 3,
            pointBackgroundColor: 'transparent',
            pointHoverBackgroundColor: 'rgba(63,82,227,1)',
        }]
    },
    options: {
        layout: {
            padding: {
                bottom: -1,
                left: -1
            }
        },
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                gridLines: {
                    display: false,
                    drawBorder: false,
                },
                ticks: {
                    beginAtZero: true,
                    display: false
                }
            }],
            xAxes: [{
                gridLines: {
                    drawBorder: false,
                    display: false,
                },
                ticks: {
                    display: false
                }
            }]
        },
    }
});

$("#products-carousel").owlCarousel({
    items: 3,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    loop: true,
    responsive: {
        0: {
            items: 2
        },
        768: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
});