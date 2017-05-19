var config0 = liquidFillGaugeDefaultSettings();
config0.circleColor = "#4785e8";
config0.textColor = "#ffffff";
config0.waveTextColor = "#ffffff";
config0.waveColor = "#87b5ff";
config0.circleThickness = 0.1;
config0.textVertPosition = 0.2;
config0.waveAnimateTime = 2000;
var gauge1 = loadLiquidFillGauge("fillgauge1", 80, config0);

function NewValue() {
    if (Math.random() > .5) {
        return Math.round(Math.random() * 100);
    } else {
        return (Math.random() * 100).toFixed(1);
    }
}
