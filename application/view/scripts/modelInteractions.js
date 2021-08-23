//adapted from example code 'benskitchen.com'

var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('nikmok__RotationTimer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('nikmok__RotationTimer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('nikmok__RotationTimer').getAttribute('enabled')!= 'true')
        document.getElementById('nikmok__RotationTimer').setAttribute('enabled', 'true');
    else
        document.getElementById('nikmok__RotationTimer').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('nikmok');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headlight()
{
	lightOn = !lightOn;
	document.getElementById('nikmok__headlight').setAttribute('headlight', lightOn.toString());
}

function cameraFront()
{
	document.getElementById('nikmok__FRONT').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('nikmok__BACK').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('nikmok__LEFT').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('nikmok__RIGHT').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('nikmok__TOP').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('nikmok__BOTTOM').setAttribute('bind', 'true');
}

function changeTexture(textur){
	document.getElementById('nikmok__textu').setAttribute('url', textur);
}

function changeTexture2(textur){
	document.getElementById('nikmok__textu').setAttribute('url', textur);
}

function toggleLightOne(){
	document.getElementById('nikmok__one').setAttribute('intensity', '0.1');
}

function toggleLightTwo(){
	document.getElementById('nikmok__two').setAttribute('intensity', '0.1');
}

function toggleLightThree(){
	document.getElementById('nikmok__three').setAttribute('intensity', '0.1');
}

function toggleLightFour(){
	document.getElementById('nikmok__four').setAttribute('intensity', '0.1');
}

function toggleLightFive(){
	document.getElementById('nikmok__five').setAttribute('intensity', '0.1');
}

function toggleLightSix(){
	document.getElementById('nikmok__six').setAttribute('intensity', '0.1');
}