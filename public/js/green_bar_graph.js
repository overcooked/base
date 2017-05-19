var canvasHeight = 300;
var dataSet = [22134, 16534, 20451, 6784, 10765, 8546, 6997, 4801, 3761, 1363];
var heightRatio = d3.max(dataSet) / canvasHeight;

var canvas = d3.select("#chart")
    .append("svg").attr("width", "100%")
    .attr("height", canvasHeight + "px")

var rectWidth = canvas.style("width").replace("px", "") / dataSet.length;
var barPadding = rectWidth / 5;

//Chart
canvas.selectAll('rect')
    .data(dataSet)
    .enter()
    .append('rect');

canvas.selectAll('rect')
    .attr('x', function(d, i) {
        return i * (rectWidth);
    })
    .attr('y', function(d) {
        return canvasHeight;
    })
    .attr("height", function(d) {
        return 0;
    })
    .attr("width", rectWidth - barPadding)
    .attr("fill", function(d) {
        return "rgb(0, " + Math.floor(256 - d / d3.max(dataSet) * 100) + ", 0)";
    });

//Animate the chart
canvas.selectAll('rect')
    .transition().duration(6000)
    .attr('y', function(d) {
        return canvasHeight - d / heightRatio;
    })
    .attr("height", function(d) {
        return d / heightRatio;
    });

// Text
canvas.selectAll('text')
    .data(dataSet)
    .enter()
    .append('text');

canvas.selectAll('text')
    .attr('x', function(d, i) {
        return i * (rectWidth) + barPadding * 2;
    })
    .attr('y', function(d) {
        return canvasHeight - d / heightRatio + 15;
    })
    .style("text-anchor", "middle")
    .attr("font-family", "Open Sans,Arial,sans-serif")
    .attr("font-size", "14px")
    .attr("font-weight", "800")
    .attr("fill", "#ffffff")
    .text(function(d) {
        return d;
    });
