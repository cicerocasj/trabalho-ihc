// link pedestre https://imagizer.imageshack.us/v2/28x21q90/853/okbi.png

var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "dark",
    "titles": [{
        "text": "Internações no SUS. \nBrasil. 1998/2012",
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
    "dataProvider": [ {
        "year": "1998",
        "cars": 20134,
        "motorcycles": 18975,
        "bicycles": 12887
    }, {
        "year": "1999",
        "cars": 20686,
        "motorcycles": 21298,
        "bicycles": 12464
    }, {
        "year": "2000",
        "cars": 19567,
        "motorcycles": 22287,
        "bicycles": 12244
    }, {
        "year": "2001",
        "cars": 15892,
        "motorcycles": 23536,
        "bicycles": 11828
    }, {
        "year": "2002",
        "cars": 16097,
        "motorcycles": 26590,
        "bicycles": 12265
    }, {
        "year": "2003",
        "cars": 16656,
        "motorcycles": 31345,
        "bicycles": 13422
    }, {
        "year": "2004",
        "cars": 18203,
        "motorcycles": 33270,
        "bicycles": 12116
    }, {
        "year": "2005",
        "cars": 16479,
        "motorcycles": 37627,
        "bicycles": 12485
    }, {
        "year": "2006",
        "cars": 14664,
        "motorcycles": 41982,
        "bicycles": 13106
    }, {
        "year": "2007",
        "cars": 13591,
        "motorcycles": 46650,
        "bicycles": 11378
    }, {
        "year": "2008",
        "cars": 9955,
        "motorcycles": 43638,
        "bicycles": 8553
    }, {
        "year": "2009",
        "cars": 13623,
        "motorcycles": 59032,
        "bicycles": 9732
    }, {
        "year": "2010",
        "cars": 15894,
        "motorcycles": 75924,
        "bicycles": 10119
    }, {
        "year": "2011",
        "cars": 16923,
        "motorcycles": 84238,
        "bicycles": 10086
    }, {
        "year": "2012",
        "cars": 16069,
        "motorcycles": 88438,
        "bicycles": 9581
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