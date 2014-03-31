//germany = Brasil
//uk = Capitais
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "dark",
    "legend": {
        "useGraphSettings": true
    },
    "dataProvider": [{
        "year": 2001,
        "italy": 1,
        "germany": 17.7,
        "uk": 21.9
    }, {
        "year": 2002,
        "italy": 1,
        "germany": 18.8,
        "uk": 21.1
    }, {
        "year": 2003,
        "italy": 2,
        "germany": 18.7,
        "uk": 21.8
    }, {
        "year": 2004,
        "italy": 3,
        "germany": 19.6,
        "uk": 21.5
    }, {
        "year": 2005,
        "italy": 5,
        "germany": 19.5,
        "uk": 22.2
    }, {
        "year": 2006,
        "italy": 3,
        "germany": 19.5,
        "uk": 21.9
    }, {
        "year": 2007,
        "italy": 1,
        "germany": 19.8,
        "uk": 21.0
    }, {
        "year": 2008,
        "italy": 2,
        "germany": 20.2,
        "uk": 20.6
    }, {
        "year": 2009,
        "italy": 3,
        "germany": 19.6,
        "uk": 19.7
    }, {
        "year": 2010,
        "italy": 4,
        "germany": 22.5,
        "uk": 22.7
    }, {
        "year": 2011,
        "italy": 1,
        "germany": 22.5,
        "uk": 21.4
    }],
    "valueAxes": [{
        "integersOnly": true,
        "maximum": 23,
        "minimum": 17,
        "reversed": true,
        "axisAlpha": 0,
        "dashLength": 5,
        "gridCount": 10,
        "position": "left",
        "title": "Taxas de óbito (por 100 mil)"
    }],
    "startDuration": 0.5,
    "graphs": [ /*{
     "balloonText": "place taken by Italy in [[category]]: [[value]]",
     "bullet": "round",
     //"hidden": true,
     "title": "Italy",
     "valueField": "italy",
     "fillAlphas": 0
     },*/ {
        // "balloonText": "place taken by Germany in [[category]]: [[value]]",
        "balloonText": "Brasil: [[value]]",
        "bullet": "round",
        "title": "Brasil",
        "valueField": "germany",
        "fillAlphas": 0
    }, {
        //"balloonText": "place taken by UK in [[category]]: [[value]]",
        "balloonText": "Capitais: [[value]]",
        "bullet": "round",
        "title": "Capitais",
        "valueField": "uk",
        "fillAlphas": 0
    }],
    "chartCursor": {
        "cursorAlpha": 0,
        "cursorPosition": "mouse",
        "zoomable": false
    },
    "categoryField": "year",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "fillAlpha": 0.05,
        "fillColor": "#000000",
        "gridAlpha": 0,
        "position": "top"
    },
    "exportConfig": {
        "menuBottom": "15px",
        "menuRight": "15px",
        "menuItems": [{
            "icon": '/lib/3/images/export.png',
            "format": 'png'
        }]
    }
});
