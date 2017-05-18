<html>
<head>
<title>Frankie Sanzica</title>
</head>
<body>
<?PHP include "header.php"; ?>
<?PHP include "menu.php"; ?>

<center>
<script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/usaHigh.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>
<div id="mapdiv" style="width: 1000px; height: 450px;"></div>
<script type="text/javascript">
var map = AmCharts.makeChart("mapdiv",{
type: "map",
theme: "light",
panEventsEnabled : true,
backgroundColor : "#535364",
backgroundAlpha : 1,
zoomControl: {
zoomControlEnabled : true
},
dataProvider : {
map : "usaHigh",
getAreasFromMap : true,
areas :
[
	{
		"id": "US-AZ",
		"showAsSelected": true
	},
	{
		"id": "US-DC",
		"showAsSelected": true
	},
	{
		"id": "US-FL",
		"showAsSelected": true
	},
	{
		"id": "US-IL",
		"showAsSelected": true
	},
	{
		"id": "US-IN",
		"showAsSelected": true
	},
	{
		"id": "US-LA",
		"showAsSelected": true
	},
	{
		"id": "US-MA",
		"showAsSelected": true
	},
	{
		"id": "US-MI",
		"showAsSelected": true
	},
	{
		"id": "US-NJ",
		"showAsSelected": true
	},
	{
		"id": "US-NV",
		"showAsSelected": true
	},
	{
		"id": "US-OH",
		"showAsSelected": true
	}
]
},
areasSettings : {
autoZoom : true,
color : "#B4B4B7",
colorSolid : "#84ADE9",
selectedColor : "#84ADE9",
outlineColor : "#666666",
rollOverColor : "#9EC2F7",
rollOverOutlineColor : "#000000"
}
});
</script>

</center>

<?PHP include "footer.php"; ?>
</body>
</html>
