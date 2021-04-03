
<html>
<head>
	<meta charset="utf-8" />
	<title>Map DSL</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
	<style>
		#sethPhatMap {
			width:100%;
			height:100%;
		}
		
		.map-popup-content {
			width: 300px;
		}
		
		.map-popup-content .left {
			float:left;
			width: 40%;
		}
		.map-popup-content .left img {
			width:100%;
			height:100px;
			margin: -15px 0 -15px -20px;
			border-radius:12px;
		}
	
		.map-popup-content .right {
			float:left;
			width: 60%;
		}
		
		.clearfix {
			clear:both;
		}
	</style>
</head>
<body>
	 <div id="sethPhatMap"></div>
</body>

<script>
	var mapObj = null;
	var defaultCoord = [48.8583, 2.2944]; // coord mặc định, 9 giữa Paris
	var zoomLevel = 2;
	var mapConfig = {
		attributionControl: false, // để ko hiện watermark nữa, nếu bị liên hệ đòi thì nhớ open nha
		center: defaultCoord, // vị trí map mặc định hiện tại
		zoom: zoomLevel, // level zoom
	};
	
	window.onload = function() {
		// init map
		mapObj = L.map('sethPhatMap', mapConfig);
		
		// add tile để map có thể hoạt động, xài free từ OSM
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(mapObj);
		
		// tạo marker
		var popupOption = {
		  	className: "map-popup-content",
		};
		var marker = addMarker([39.4064, -85.8178], `<div class='left'><img src='1.jpg' /></div><div class='right'><b>Baleine</b><br>Temperérature: 58</div><div class='clearfix'></div>`, popupOption);
		var marker = addMarker([47.7146, 1.3210], `<div class='left'><img src='tigre.jpg' /></div><div class='right'><b>Tigre</b><br>Temperérature: 58</div><div class='clearfix'></div>`, popupOption);
		var marker = addMarker([10.8140, 106.6114], `<div class='left'><img src='tortue.jpg' /></div><div class='right'><b>Tortue</b><br>Temperérature: 58</div><div class='clearfix'></div>`, popupOption);
		var marker = addMarker([45.4409, 12.3179], `<div class='left'><img src='rhino.jpeg' /></div><div class='right'><b>Rhino</b><br>Temperérature: 58</div><div class='clearfix'></div>`, popupOption);

	};
	
	function addMarker(coord, popupContent, popupOptionObj, markerObj) {
		if (!popupOptionObj) {
			popupOptionObj = {};
		}
		if (!markerObj) {
			markerObj = {};
		}
		
		var marker = L.marker(coord, markerObj).addTo(mapObj); // chơi liều @@
		var popup = L.popup(popupOptionObj);
		popup.setContent(popupContent);
		
		// binding
		marker.bindPopup(popup);
		
		return marker;
	}	
</script>
</html>