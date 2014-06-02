var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "dark",
    "pathToImages": "http://www.amcharts.com/lib/3/images/",
    "legend": {
        "equalWidths": false,
        "periodValueText": "total: [[value.sum]]",
        "position": "top",
        "valueAlign": "left",
        "valueWidth": 100
    },
    "dataProvider": [   /*{
     "year": 1994,
     "cars": 1587,
     "motorcycles": 650,
     //"bicycles": 121
     }, {
     "year": 1995,
     "cars": 1567,
     "motorcycles": 683,
     //"bicycles": 146
     }, {
     "year": 1996,
     "cars": 1617,
     "motorcycles": 691,
     //"bicycles": 138
     }, {
     "year": 1997,
     "cars": 1630,
     "motorcycles": 642,
     //"bicycles": 127
     },*/ {
        "year": 1998,
        "cars": 70,
        "motorcycles": 11.5,
        //"bicycles": 105
    }, {
        "year": 1999,
        "cars": 69.2,
        "motorcycles": 12.4,
        //"bicycles": 109
    }, {
        "year": 2000,
        "cars": 67.2,
        "motorcycles": 13.6,
        //"bicycles": 112
    }, {
        "year": 2001,
        "cars": 66.5,
        "motorcycles": 14.5,
        //"bicycles": 101
    }, {
        "year": 2002,
        "cars": 65.6,
        "motorcycles": 15.7,
        //"bicycles": 97
    }, {
        "year": 2003,
        "cars": 64.6,
        "motorcycles": 17,
        //"bicycles": 93
    }, {
        "year": 2004,
        "cars": 63.5,
        "motorcycles": 18.2,
        //"bicycles": 111
    }, {
        "year": 2005,
        "cars": 62.5,
        "motorcycles": 19.4,
        //"bicycles": 87
    }, {
        "year": 2006,
        "cars": 61.4,
        "motorcycles": 20.8,
        // "bicycles": 79
    }, {
        "year": 2007,
        "cars": 60.1,
        "motorcycles": 22.5,
        // "bicycles": 81
    }, {
        "year": 2008,
        "cars": 58.8,
        "motorcycles": 24,
        // "bicycles": 75
    }, {
        "year": 2009,
        "cars": 58.2,
        "motorcycles": 24.8,
//        "bicycles": 88
    }, {
        "year": 2010,
        "cars": 57.4,
        "motorcycles": 25.5,
        // "bicycles": 82
    }, {
        "year": 2011,
        "cars": 56.5,
        "motorcycles": 26.1,
        //  "bicycles": 87
    } /*, {
     "year": 2012,
     "cars": 1159,
     "motorcycles": 277,
     // "bicycles": 71
     }*/  ],
    "valueAxes": [{
        "stackType": "regular",
        "gridAlpha": 0.07,
        "position": "left",
        "title": "Participação (%) de motos e carros na frota total. \nBrasil. 1998/2011"
    }],
    "graphs": [{
        "balloonText": "<img src='http://www.amcharts.com/lib/3/images/car.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>",
        "fillAlphas": 0.6,
        //"hidden": true,
        "lineAlpha": 0.4,
        "title": "Carros",
        "valueField": "cars"
    }, {
        "balloonText": "<img src='http://www.amcharts.com/lib/3/images/motorcycle.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>",
        "fillAlphas": 0.6,
        "lineAlpha": 0.4,
        "title": "Motos",
        "valueField": "motorcycles"
    } /*, {
     "balloonText": "<img src='http://www.amcharts.com/lib/3/images/bicycle.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>",
     "fillAlphas": 0.6,
     "lineAlpha": 0.4,
     "title": "Bicycles",
     "valueField": "bicycles"
     }*/  ],
    "plotAreaBorderAlpha": 0,
    "marginTop": 10,
    "marginLeft": 0,
    "marginBottom": 0,
    "chartScrollbar": {},
    "chartCursor": {
        "cursorAlpha": 0
    },
    "categoryField": "year",
    "categoryAxis": {
        "startOnAxis": true,
        "axisColor": "#DADADA",
        "gridAlpha": 0.07,
        "guides": [{
            category: "2001",
            toCategory: "2003",
            lineColor: "#CC0000",
            lineAlpha: 1,
            fillAlpha: 0.2,
            fillColor: "#CC0000",
            dashLength: 2,
            inside: true,
            labelRotation: 90,
            label: "fines for speeding increased"
        }, {
            category: "2007",
            lineColor: "#CC0000",
            lineAlpha: 1,
            dashLength: 2,
            inside: true,
            labelRotation: 90,
            label: "motorcycle fee introduced"
        }]
    },
    "exportConfig": {
        "menuTop": "10px",
        "menuRight": "10px",
        "menuItems": [{
            "icon": '/lib/3/images/export.png',
            "format": 'png'
        }]
    }
});