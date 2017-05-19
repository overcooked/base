var itms = [{
        name: 'EGGS',
        val: 30000
    },
    {
        name: 'POTATOES',
        val: 80000
    },
    {
        name: 'APPLES',
        val: 55000
    },
    {
        name: 'MILK (GLASS)',
        val: 70000
    },
    {
        name: 'BREAK (LOAF)',
        val: 32000
    }
];

var svgHeight = 500;
var svgWidth = 600;
var maxval = 100000;
var barSpacing = 1;
var padding = {
    left: 70,
    right: 40,
    top: 40,
    bottom: 40
};

function animateBarsUp() {
    var maxWidth = svgWidth - padding.left - padding.right;
    var maxHeight = svgHeight - padding.top - padding.bottom;

    var convert = {
        x: d3.scale.ordinal(),
        y: d3.scale.linear()
    };

    var axis = {
        x: d3.svg.axis().orient('bottom'),
        y: d3.svg.axis().orient('left')
    };

    axis.x.scale(convert.x);
    axis.y.scale(convert.y);

    convert.y.range([maxHeight, 0]);
    convert.x.rangeRoundBands([0, maxWidth]);

    convert.x.domain(itms.map(function(d) {
        return d.name;
    }));
    convert.y.domain([0, maxval]);

    var svg = d3.select('.chart')
        .attr({
            width: svgWidth,
            height: svgHeight
        });

    // The group node that will contain all the other nodes
    // that render your chart
    var chart = svg.append('g')
        .attr({
            transform: function(d, i) {
                return 'translate(' + padding.left + ',' + padding.top + ')';
            }
        });

    chart.append('g') // Container for the axis
        .attr({
            class: 'x axis',
            transform: 'translate(0,' + maxHeight + ')'
        })
        .call(axis.x); // Insert an axis inside this node

    chart.append('g') // Container for the axis
        .attr({
            class: 'y axis',
            height: maxHeight
        })
        .call(axis.y); // Insert an axis inside this node

    var bars = chart
        .selectAll('g.bar-group')
        .data(itms)
        .enter()
        .append('g') // Container for the each bar
        .attr({
            transform: function(d, i) {
                return 'translate(' + convert.x(d.name) + ', 0)';
            },
            class: 'bar-group'
        });

    bars.append('rect')
        .attr({
            y: maxHeight,
            height: 0,
            width: function(d) {
                return convert.x.rangeBand(d) - 1;
            },
            class: 'bar'
        })
        .transition()
        .duration(4000)
        .attr({
            y: function(d, i) {
                return convert.y(d.val);
            },
            height: function(d, i) {
                return maxHeight - convert.y(d.val);
            }
        });

    return chart;
}

animateBarsUp();
