$(function(){

    // Helpers

    var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var DAYS = ["Sunday", "Munday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var DAYS_S = ["S", "M", "T", "W", "T", "F", "S"];
    var color = Chart.helpers.color;
    var r = function(min, max) {
        min = min || 1;
        max = max || 99;
        var rand = min - 0.5 + Math.random() * (max - min + 1)
        rand = Math.round(rand);
        return rand;
    };

    // Bar Chart example

    var config = {
        type: 'bar',
        data: {
            labels: DAYS,
            datasets: [
                {
                    label: 'Dataset 1',
                    backgroundColor: color(theme_color('primary')).rgbString(),
                    data: [45, 80, 58, 74, 54, 59, 40]
                },
                {
                    label: 'Dataset 2',
                    backgroundColor: theme_color('light'),
                    data: [29, 48, 40, 19, 78, 31, 85]
                }
            ],
        },
        options: {
            responsive: true,
        }
    };
    var ctx = document.getElementById("bar_chart").getContext("2d");
    new Chart(ctx, config);

    // Line Chart example

    var config = {
        type: 'line',
        data: {
            labels: DAYS_S,
            datasets: [{
                label: 'Dataset 1',
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: theme_color('success'),
                borderColor: theme_color('success'),
                fill: false,
                borderDash: [5, 5],
            }, {
                label: 'Dataset 2',
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: theme_color('danger'),
                borderColor: theme_color('danger'),
                fill: false,
            }]
        },
        options: {
            responsive: true,
        }
    }
    var ctx = document.getElementById("line_chart").getContext("2d");
    new Chart(ctx, config);

    // Area Chart example

    var config = {
        type: 'line',
        data: {
            labels: DAYS_S,
            datasets: [{
                label: 'Dataset 1',
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: color(theme_color('primary')).alpha(0.4).rgbString(),
                borderColor: theme_color('primary'),
                fill: 'start',
            }]
        },
        options: {
            responsive: true,
            elements: {
                line: {
                    tension: 0.000001
                }
            },
        }
    }
    var ctx = document.getElementById("area_chart").getContext("2d");
    new Chart(ctx, config);

    var config = {
        type: 'line',
        data: {
            labels: DAYS_S,
            datasets: [{
                label: 'Dataset 1',
                data: [20, 18, 40, 50, 35, 24, 40],
                backgroundColor: color(theme_color('indigo')).alpha(0.7).rgbString(),
                borderColor: theme_color('indigo'),
                fill: 'start',
            }, 
            {
                label: 'Dataset 2',
                data: [28, 48, 40, 35, 70, 33, 32],
                backgroundColor: color(theme_color('pink')).alpha(1).rgbString(),
                borderColor: theme_color('pink'),
                fill: 'start',
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    }
    var ctx = document.getElementById("area_chart_2").getContext("2d");
    new Chart(ctx, config);

    // Point sizes

    var config = {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'dataset - big points',
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: theme_color('danger'),
                borderColor: theme_color('danger'),
                fill: false,
                borderDash: [5, 5],
                pointRadius: 15,
                pointHoverRadius: 10,
            }, {
                label: 'dataset - individual point sizes',
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: theme_color('primary'),
                borderColor: theme_color('primary'),
                fill: false,
                borderDash: [5, 5],
                pointRadius: [2, 4, 6, 18, 0, 12, 20],
            }, {
                label: 'dataset - large pointHoverRadius',
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: theme_color('success'),
                borderColor: theme_color('success'),
                fill: false,
                pointHoverRadius: 30,
            }, {
                label: 'dataset - large pointHitRadius',
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: theme_color('warning'),
                borderColor: theme_color('warning'),
                fill: false,
                pointHitRadius: 20,
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
            hover: {
                mode: 'index'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title: {
                display: true,
                text: 'Chart.js Line Chart - Different point sizes'
            }
        }
    };
    var ctx = document.getElementById("point_sizes").getContext("2d");
    new Chart(ctx, config);

    // Stacked bars example

    var config = {
        type: 'bar',
        data: {
            labels: DAYS_S,
            datasets: [
                {
                    label: 'Dataset 1',
                    backgroundColor: theme_color('primary'),
                    stack: 'Stack 0',
                    data: [r(),r(),r(),r(),r(),r(),r()],
                },
                {
                    label: 'Dataset 2',
                    backgroundColor: theme_color('success'),
                    stack: 'Stack 0',
                    data: [r(),r(),r(),r(),r(),r(),r()],
                },
                {
                    label: 'Dataset 3',
                    backgroundColor: theme_color('warning'),
                    stack: 'Stack 1',
                    data: [r(),r(),r(),r(),r(),r(),r()],
                }
            ],
        },
        options: {
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    };
    var ctx = document.getElementById("stacked_bars").getContext("2d");
    new Chart(ctx, config);

    // Horizonal bars example

    var config = {
        type: 'horizontalBar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: theme_color('danger'),
                borderColor: theme_color('danger'),
                borderWidth: 1,
                data: [
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                ]
            }, {
                label: 'Dataset 2',
                backgroundColor: theme_color('primary'),
                borderColor:theme_color('primary'),
                data: [
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                    r(-100, 100),
                ]
            }]
        },
        options: {
            elements: {
                rectangle: {
                    borderWidth: 2,
                }
            },
            responsive: true,
        }
    };
    var ctx = document.getElementById("horizonal_bars").getContext("2d");
    new Chart(ctx, config);

    // Combo chart example

    var config = {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                type: 'line',
                label: 'Dataset 1',
                borderColor: theme_color('primary'),
                borderWidth: 2,
                fill: false,
                data: [r(),r(),r(),r(),r(),r(),r()],
            }, {
                type: 'bar',
                label: 'Dataset 2',
                backgroundColor: theme_color('danger'),
                data: [r(),r(),r(),r(),r(),r(),r()],
                borderColor: 'white',
                borderWidth: 2
            }, {
                type: 'bar',
                label: 'Dataset 3',
                backgroundColor: theme_color('success'),
                data: [r(),r(),r(),r(),r(),r(),r()],
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'Chart.js Combo Bar Line Chart'
            },
            tooltips: {
                mode: 'index',
                intersect: true
            }
        }
    }
    var ctx = document.getElementById("combo_chart").getContext("2d");
    new Chart(ctx, config);

    // Pie Chart example

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [r(),r(),r(),r(),r()],
                backgroundColor: [
                    theme_color('danger'),
                    theme_color('warning'),
                    theme_color('purple'),
                    theme_color('success'),
                    theme_color('primary'),
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Red',
                'Orange',
                'Purple',
                'Green',
                'Blue'
            ]
        },
        options: {
            responsive: true
        }
    };
    var ctx = document.getElementById('pie_chart').getContext('2d');
    new Chart(ctx, config);

    // Doughnut Chart example

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [r(),r(),r(),r(),r()],
                backgroundColor: [
                    theme_color('danger'),
                    theme_color('warning'),
                    theme_color('purple'),
                    theme_color('success'),
                    theme_color('primary'),
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Red',
                'Orange',
                'Purple',
                'Green',
                'Blue'
            ]
        },
        options: {
            responsive: true,
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };
    var ctx = document.getElementById('doughnut_chart').getContext('2d');
    new Chart(ctx, config);

    // Polar area example

    var config = {
        data: {
            datasets: [{
                data: [r(),r(),r(),r(),r()],
                backgroundColor: [
                    theme_color('danger'),
                    theme_color('warning'),
                    theme_color('purple'),
                    theme_color('success'),
                    theme_color('primary'),
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Red',
                'Orange',
                'Purple',
                'Green',
                'Blue'
            ]
        },
        options: {
            responsive: true,
            scale: {
                ticks: {
                    beginAtZero: true
                },
                reverse: false
            },
            animation: {
                animateScale: true,
                animateRotate: false
            }
        }
    };
    var ctx = document.getElementById('polar_chart').getContext('2d');
    Chart.PolarArea(ctx, config);

    // Radar example

    var config = {
        type: 'radar',
        data: {
            labels: [['Eating', 'Dinner'], ['Drinking', 'Water'], 'Sleeping', ['Designing', 'Graphics'], 'Coding', 'Cycling', 'Running'],
            datasets: [{
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: color(theme_color('primary')).alpha(0.5).rgbString(),
                borderColor: theme_color('primary'),
                label: 'Dataset 1'
            },{
                data: [r(),r(),r(),r(),r(),r(),r()],
                backgroundColor: color(theme_color('danger')).alpha(0.5).rgbString(),
                borderColor: theme_color('danger'),
                label: 'Dataset 1'
            }]
        },
        options: {
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        }
    };
    var ctx = document.getElementById('radar_chart').getContext('2d');
    new Chart(ctx, config);

});
