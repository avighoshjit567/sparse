$(function() {
    var colors = d3.scale.category10();

    // Basic Map example
    var basic = new Datamap({
        element: document.getElementById("basic_map"),
        responsive: true,
    });

    // Basic example with selected regions
    var basic_choropleth_map = new Datamap({
        element: document.getElementById("basic_choropleth_map"),
        responsive: true,
        fills: {
            defaultFill: '#DADDE0',// '#d1d5d8' "#DBDAD6",
            active: '#18C5A9'
        },
        geographyConfig: {
            highlightFillColor: '#18C5A9',
            highlightBorderWidth: 0,
        },
        data: {
            USA: { fillKey: "active" },
            RUS: { fillKey: "active" },
            IND: { fillKey: "active" },
            ARG: { fillKey: "active" }
        }
    });

    // USA scope with labels
    var usa_labels_map = new Datamap({
        element: document.getElementById("usa_labels_map"),
        responsive: true,
        scope: 'usa',
        geographyConfig: {
            highlightBorderColor: '#bada55',
            popupTemplate: function(geography, data) {
                return '<div class="hoverinfo">' + geography.properties.name + ' Electoral Votes:' +  data.electoralVotes + ' '
            },
            highlightBorderWidth: 3
        },
        fills: {
            'Republican': '#CC4731',
            'Democrat': '#306596',
            'Heavy Democrat': '#667FAF',
            'Light Democrat': '#A9C0DE',
            'Heavy Republican': '#CA5E5B',
            'Light Republican': '#EAA9A8',
            defaultFill: '#EDDC4E'
        },
        data:{
          "AZ": {
              "fillKey": "Republican",
              "electoralVotes": 5
          },
          "CO": {
              "fillKey": "Light Democrat",
              "electoralVotes": 5
          },
          "DE": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "FL": {
              "fillKey": "UNDECIDED",
              "electoralVotes": 29
          },
          "GA": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "HI": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "ID": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "IL": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "IN": {
              "fillKey": "Republican",
              "electoralVotes": 11
          },
          "IA": {
              "fillKey": "Light Democrat",
              "electoralVotes": 11
          },
          "KS": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "KY": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "LA": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "MD": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "ME": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "MA": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "MN": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "MI": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "MS": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "MO": {
              "fillKey": "Republican",
              "electoralVotes": 13
          },
          "MT": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "NC": {
              "fillKey": "Light Republican",
              "electoralVotes": 32
          },
          "NE": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "NV": {
              "fillKey": "Heavy Democrat",
              "electoralVotes": 32
          },
          "NH": {
              "fillKey": "Light Democrat",
              "electoralVotes": 32
          },
          "NJ": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "NY": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "ND": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "NM": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "OH": {
              "fillKey": "UNDECIDED",
              "electoralVotes": 32
          },
          "OK": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "OR": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "PA": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "RI": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "SC": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "SD": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "TN": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "TX": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "UT": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "WI": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "VA": {
              "fillKey": "Light Democrat",
              "electoralVotes": 32
          },
          "VT": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "WA": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "WV": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "WY": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "CA": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "CT": {
              "fillKey": "Democrat",
              "electoralVotes": 32
          },
          "AK": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "AR": {
              "fillKey": "Republican",
              "electoralVotes": 32
          },
          "AL": {
              "fillKey": "Republican",
              "electoralVotes": 32
          }
        }
    });
    usa_labels_map.labels(); 

    // USA scope with arcs
    var usa_arcs_map = new Datamap({
      element: document.getElementById("usa_arcs_map"),
      scope: 'usa',
      responsive: true,
      fills: {
        defaultFill: "#ABDDA4",
        win: '#0fa0fa'
      },
      data: {
        'TX': { fillKey: 'win' },
        'FL': { fillKey: 'win' },
        'NC': { fillKey: 'win' },
        'CA': { fillKey: 'win' },
        'NY': { fillKey: 'win' },
        'CO': { fillKey: 'win' }
      }
    });

    // Arcs coordinates can be specified explicitly with latitude/longtitude,
    // or just the geographic center of the state/country.
    usa_arcs_map.arc([
      {
        origin: 'CA',
        destination: 'TX'
      },
      {
        origin: 'OR',
        destination: 'TX'
      },
      {
        origin: 'NY',
        destination: 'TX'
      },
      {
          origin: {
              latitude: 40.639722,
              longitude: -73.778889
          },
          destination: {
              latitude: 37.618889,
              longitude: -122.375
          }
      },
      {
          origin: {
              latitude: 30.194444,
              longitude: -97.67
          },
          destination: {
              latitude: 25.793333,
              longitude: -80.290556
          },
          options: {
            strokeWidth: 2,
            strokeColor: 'rgba(100, 10, 200, 0.4)',
            greatArc: true
          }
      },
      {
          origin: {
              latitude: 39.861667,
              longitude: -104.673056
          },
          destination: {
              latitude: 35.877778,
              longitude: -78.7875
          }
      }
    ],  {strokeWidth: 1, arcSharpness: 1.4});

    // Map with arcs
    var arcs_map = new Datamap({
        element: document.getElementById("arc_map"),
        responsive: true,
        fills: {
            defaultFill: "#F2F2F0",
            to: "#DADDE0",
            from: "#18C5A9"
        },
        geographyConfig: {
            highlightFillColor: '#18C5A9',
            highlightBorderWidth: 0
        },
        data: {
            CAN: {fillKey: "from"},
            AUS: {fillKey: "from"},
            RUS: {fillKey: "to"},
            FRA: {fillKey: "to"},
            POL: {fillKey: "to"},
            IND: {fillKey: "to"},
            ARG: {fillKey: "to"},
            BRA: {fillKey: "to"},
        }
    });

    arcs_map.arc(
        [
            { origin: 'CAN', destination: 'RUS'},
            { origin: 'CAN', destination: 'FRA'},
            { origin: 'CAN', destination: 'POL'},
            { origin: 'CAN', destination: 'AUS'},
            { origin: 'CAN', destination: 'ARG'},
            { origin: 'AUS', destination: 'IND'},
            { origin: 'AUS', destination: 'BRA'},
        ],
        { strokeColor: '#18C5A9', strokeWidth: 1}
    );



    // Bubbles Map example
    var bubble_map = new Datamap({
      element: document.getElementById("bubbles_map"),
      responsive: true,
      geographyConfig: {
        popupOnHover: false,
        highlightOnHover: false
      },
      fills: {
        defaultFill: '#ABDDA4',
        USA: 'blue',
        RUS: 'red'
      }
    });
    bubble_map.bubbles([
      {
        name: 'Not a bomb, but centered on Brazil',
        radius: 23,
        centered: 'BRA',
        country: 'USA',
        yeild: 0,
        fillKey: 'USA',
        date: '1954-03-01'
      },
      {
        name: 'Not a bomb',
        radius: 15,
        yeild: 0,
        country: 'USA',
        centered: 'USA',
        date: '1986-06-05',
        significance: 'Centered on US',
        fillKey: 'USA'
      },
      {
        name: 'Castle Bravo',
        radius: 25,
        yeild: 15000,
        country: 'USA',
        significance: 'First dry fusion fuel "staged" thermonuclear weapon; a serious nuclear fallout accident occurred',
        fillKey: 'USA',
        date: '1954-03-01',
        latitude: 11.415,
        longitude: 165.1619
      },{
        name: 'Tsar Bomba',
        radius: 70,
        yeild: 50000,
        country: 'USSR',
        fillKey: 'RUS',
        significance: 'Largest thermonuclear weapon ever tested—scaled down from its initial 100 Mt design by 50%',
        date: '1961-10-31',
        latitude: 73.482,
        longitude: 54.5854
      }
    ], {
      popupTemplate: function(geo, data) {
        return '<div class="hoverinfo">Yield:' + data.yeild + 'Exploded on ' + data.date + ' by the '  + data.country + ''
      }
    });

    // Projections Map example
    var projection_map = new Datamap({
        scope: 'world',
        element: document.getElementById('projection_map'),
        responsive: true,
        projection: 'orthographic',
        fills: {
          defaultFill: "#ABDDA4",
          gt50: colors(Math.random() * 20),
          eq50: colors(Math.random() * 20),
          lt25: colors(Math.random() * 10),
          gt75: colors(Math.random() * 200),
          lt50: colors(Math.random() * 20),
          eq0: colors(Math.random() * 1),
          pink: '#0fa0fa',
          gt500: colors(Math.random() * 1)
        },
        projectionConfig: {
          rotation: [97,-30]
        },
        data: {
          'USA': {fillKey: 'lt50' },
          'MEX': {fillKey: 'lt25' },
          'CAN': {fillKey: 'gt50' },
          'GTM': {fillKey: 'gt500'},
          'HND': {fillKey: 'eq50' },
          'BLZ': {fillKey: 'pink' },
          'GRL': {fillKey: 'eq0' },
          'CAN': {fillKey: 'gt50' }
        }
      });

      projection_map.graticule();

      projection_map.arc([{
        origin: {
          latitude: 61,
          longitude: -149
        },
        destination: {
          latitude: -22,
          longitude: -43
        }
      }], {
        greatArc: true,
        animationSpeed: 2000
      });

    // Zoom Map example
    var zoom_map = new Datamap({
      element: document.getElementById("zoom_map"),
      responsive: true,
      scope: 'world',
      // Zoom in on Africa
      setProjection: function(element) {
        var projection = d3.geo.equirectangular()
          .center([23, -3])
          .rotate([4.4, 0])
          .scale(400)
          .translate([element.offsetWidth / 2, element.offsetHeight / 2]);
        var path = d3.geo.path()
          .projection(projection);

        return {path: path, projection: projection};
      },
      fills: {
        defaultFill: "#ABDDA4",
        gt50: colors(Math.random() * 20),
        eq50: colors(Math.random() * 20),
        lt25: colors(Math.random() * 10),
        gt75: colors(Math.random() * 200),
        lt50: colors(Math.random() * 20),
        eq0: colors(Math.random() * 1),
        pink: '#0fa0fa',
        gt500: colors(Math.random() * 1)
      },
      data: {
        'ZAF': { fillKey: 'gt50' },
        'ZWE': { fillKey: 'lt25' },
        'NGA': { fillKey: 'lt50' },
        'MOZ': { fillKey: 'eq50' },
        'MDG': { fillKey: 'eq50' },
        'EGY': { fillKey: 'gt75' },
        'TZA': { fillKey: 'gt75' },
        'LBY': { fillKey: 'eq0' },
        'DZA': { fillKey: 'gt500' },
        'SSD': { fillKey: 'pink' },
        'SOM': { fillKey: 'gt50' },
        'GIB': { fillKey: 'eq50' },
        'AGO': { fillKey: 'lt50' }
      }
    });

    zoom_map.bubbles([
     {name: 'Bubble 1', latitude: 21.32, longitude: -7.32, radius: 45, fillKey: 'gt500'},
     {name: 'Bubble 2', latitude: 12.32, longitude: 27.32, radius: 25, fillKey: 'eq0'},
     {name: 'Bubble 3', latitude: 0.32, longitude: 23.32, radius: 35, fillKey: 'lt25'},
     {name: 'Bubble 4', latitude: -31.32, longitude: 23.32, radius: 55, fillKey: 'eq50'},
    ], {
     popupTemplate: function(geo, data) {
       return "<div class='hoverinfo'>Bubble for " + data.name + "";
     }
    });

});