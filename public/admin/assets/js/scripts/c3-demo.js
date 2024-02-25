$(function(){
    // Line Chart example
    c3.generate({
        bindto: '#line-chart',
        data:{
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 50, 20, 10, 40, 15, 25]
            ],
            colors:{
                data1: theme_color('primary'),
                data2: theme_color('warning'),
            }
        }
    });

    // Spline Chart example
    c3.generate({
        bindto: '#spline-chart',
        data:{
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 130, 100, 140, 200, 150, 50]
            ],
            colors:{
                data1: theme_color('success'),
                data2: theme_color('danger'),
            },
            type: 'spline'
        }
    });

    // Bar Chart example
    c3.generate({
        bindto: '#bar-chart',
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 130, 100, 140, 200, 150, 50]
            ],
            colors:{
                data1: theme_color('success'),
                data2: theme_color('danger'),
            },
            type: 'bar'
        },
        bar: {
            width: {
                ratio: 0.5 // this makes bar width 50% of length between ticks
            }
            // or
            //width: 100 // this makes bar width 100px
        }
    });

    // Area Chart example
    c3.generate({
        bindto: '#area-chart',
        data: {
            columns: [
                ['data1', 300, 350, 300, 0, 0, 0],
                ['data2', 130, 100, 140, 200, 150, 50]
            ],
            colors:{
                data1: theme_color('primary'),
                data2: theme_color('secondary'),
            },
            types: {
                data1: 'area',
                data2: 'area-spline'
            }
        }
    });

    // Stacked Bar Chart example
    c3.generate({
        bindto: '#stackedbar',
        data:{
            columns: [
                ['data1', 30,200,100,400,150,250],
                ['data2', 50,20,10,40,15,25]
            ],
            colors:{
                data1: theme_color('primary'),
                data2: theme_color('warning'),
            },
            type: 'bar',
            groups: [
                ['data1', 'data2']
            ]
        }
    });

    // Pie Chart example
    c3.generate({
        bindto: '#pie-chart',
        data:{
            columns: [
                ['data1', 30],
                ['data2', 120]
            ],
            colorsx:{
                data1: theme_color('primary'),
                data2: theme_color('warning'),
            },
            type : 'pie'
        }
    });

    // Donut Chart example
    c3.generate({
        bindto: '#donut-chart',
        data:{
            columns: [
                ['data1', 30],
                ['data2', 50],
                ['data3', 70],
            ],
            colors:{
                data1: theme_color('indigo'),
                data2: theme_color('pink'),
                data3: theme_color('success'),
            },
            type : 'donut',
            donut: {
                title: "Iris Petal Width"
            }
        }
    });

    // Gauge Chart example
    c3.generate({
        bindto: '#gauge-chart',
        data:{
            columns: [
                ['data', 91.4]
            ],

            type: 'gauge'
        },
        color:{
            pattern: [
                theme_color('primary'),
                theme_color('light'),
            ]

        }
    });

    // Scatter Plot example
    c3.generate({
        bindto: '#scatter-plot',
        data:{
            xs: {
                setosa: 'setosa_x',
                versicolor: 'versicolor_x',
            },
            // iris data from R
            columns: [
                ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
                ["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
                ["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2],
                ["versicolor", 1.4, 1.5, 1.5, 1.3, 1.5, 1.3, 1.6, 1.0, 1.3, 1.4, 1.0, 1.5, 1.0, 1.4, 1.3, 1.4, 1.5, 1.0, 1.5, 1.1, 1.8, 1.3, 1.5, 1.2, 1.3, 1.4, 1.4, 1.7, 1.5, 1.0, 1.1, 1.0, 1.2, 1.6, 1.5, 1.6, 1.5, 1.3, 1.3, 1.3, 1.2, 1.4, 1.2, 1.0, 1.3, 1.2, 1.3, 1.3, 1.1, 1.3],
            ],
            colors:{
                setosa: theme_color('primary'),
                versicolor: theme_color('pink'),
            },
            type: 'scatter'
        },
        axis: {
            x: {
                label: 'Sepal.Width',
                tick: {
                    fit: false
                }
            },
            y: {
                label: 'Petal.Width'
            }
        }
    });

    // Combination Chart example
    c3.generate({
        bindto: '#combination-chart',
        data: {
            columns: [
                ['data1', 30, 20, 50, 40, 60, 50],
                ['data2', 200, 130, 90, 240, 130, 220],
                ['data3', 300, 200, 160, 400, 250, 250],
                ['data4', 200, 130, 90, 240, 130, 220],
                ['data5', 130, 120, 150, 140, 160, 150],
                ['data6', 90, 70, 20, 50, 60, 120],
            ],
            type: 'bar',
            types: {
                data3: 'spline',
                data4: 'line',
                data6: 'area',
            },
            groups: [
                ['data1','data2']
            ],
        }
    });
});
