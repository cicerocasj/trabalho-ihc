// link pedestre https://imagizer.imageshack.us/v2/28x21q90/853/okbi.png

var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "dark",
    "titles": [{
        "text": "Óbitos em acidentes de trânsito. \n 1996/2011",
        "size": 12
    }],
    "pathToImages": "http://www.amcharts.com/lib/3/images/",
    "legend": {
        "align": "center",
        "equalWidths": false,
        "periodValueText": "total: [[value.sum]]",
        "valueAlign": "left",
        "valueText": "[[value]] ([[percents]]%)",
        "valueWidth": 300
    },
    "dataProvider": [  {
        "year": "1996",
        "cars": 7188,
        "motorcycles": 1421,
        "bicycles": 620
    }, {
        "year": "1997",
        "cars": 7353,
        "motorcycles": 1877,
        "bicycles": 822
    }, {
        "year": "1998",
        "cars": 6628,
        "motorcycles": 1894,
        "bicycles": 717
    }, {
        "year": "1999",
        "cars": 7799,
        "motorcycles": 2689,
        "bicycles": 933
    }, {
        "year": "2000",
        "cars": 8262,
        "motorcycles": 3910,
        "bicycles": 1238
    }, {
        "year": "2001",
        "cars": 8483,
        "motorcycles": 4541,
        "bicycles": 1462
    }, {
        "year": "2002",
        "cars": 9069,
        "motorcycles": 5440,
        "bicycles": 1788
    }, {
        "year": "2003",
        "cars": 9018,
        "motorcycles": 6046,
        "bicycles": 1779
    }, {
        "year": "2004",
        "cars": 9875,
        "motorcycles": 6961,
        "bicycles": 1908
    }, {
        "year": "2005",
        "cars": 9492,
        "motorcycles": 8089,
        "bicycles": 2055
    }, {
        "year": "2006",
        "cars": 9754,
        "motorcycles": 9191,
        "bicycles": 2130
    }, {
        "year": "2007",
        "cars": 10218,
        "motorcycles": 10392,
        "bicycles": 2111
    }, {
        "year": "2008",
        "cars": 10420,
        "motorcycles": 11471,
        "bicycles": 2072
    }, {
        "year": "2009",
        "cars": 10347,
        "motorcycles": 11839,
        "bicycles": 2001
    }, {
        "year": "2010",
        "cars": 11405,
        "motorcycles": 13452,
        "bicycles": 1909
    }, {
        "year": "2011",
        "cars": 12429,
        "motorcycles": 14666,
        "bicycles": 1884
    } ],
    "valueAxes": [{
        "stackType": "100%",
        "gridAlpha": 0.07,
        "position": "left",
        "title": ""
    }],
    "graphs": [{
        "balloonText": "<img src='http://www.amcharts.com/lib/3/images/car.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>",
        "fillAlphas": 0.5,
        "lineAlpha": 0.5,
        "title": "Carros",
        "valueField": "cars"
    }, {
        "balloonText": "<img src='http://www.amcharts.com/lib/3/images/motorcycle.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>",
        "fillAlphas": 0.5,
        "lineAlpha": 0.5,
        "title": "Motos",
        "valueField": "motorcycles"
    }, {
        "balloonText": "<img src='http://www.amcharts.com/lib/3/images/bicycle.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>",
        "fillAlphas": 0.5,
        "lineAlpha": 0.5,
        "title": "Bicicletas",
        "valueField": "bicycles"
    }],
    "plotAreaBorderAlpha": 0,
    "marginLeft": 0,
    "marginBottom": 0,
    "chartCursor": {
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "year",
    "categoryAxis": {
        "startOnAxis": true,
        "axisColor": "#DADADA",
        "gridAlpha": 0.07
    },
    "exportConfig": {
        "menuTop": "10px",
        "menuRight": "11px",
        "menuItems": [{
            "icon": 'http://www.amcharts.com/lib/3/images/export.png',
            "format": 'png'
        }]
    }
});