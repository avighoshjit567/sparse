$(function(){
    
    Morris.Line({
      element: 'line-chart',
      data: [
        { y: '2006', a: 100, b: 90 },
        { y: '2007', a: 75,  b: 65 },
        { y: '2008', a: 50,  b: 40 },
        { y: '2009', a: 75,  b: 65 },
        { y: '2010', a: 50,  b: 40 },
        { y: '2011', a: 75,  b: 65 },
        { y: '2012', a: 100, b: 90 }
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      lineColors: [theme_color('primary'), '#7A92A3'],
    });

    Morris.Bar({
        element: 'bar-chart',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true,
        barColors: [theme_color('primary'), '#7A92A3'],
    });

    Morris.Area({
        element: 'area-chart',
        data: [{ y: '2006', a: 60, b: 50 },
            { y: '2007', a: 45, b: 29 },
            { y: '2008', a: 80, b: 48 },
            { y: '2009', a: 58, b: 40 },
            { y: '2010', a: 74, b: 19 },
            { y: '2011', a: 59, b: 31 },
            { y: '2012', a: 40, b: 75 } ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
    });

    Morris.Donut({
        element: 'donut-chart',
        data: [
            {label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}
        ],
        formatter: function (y) { return y + "%" },
        resize: true,
    });

});
