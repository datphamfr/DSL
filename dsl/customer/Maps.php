<!DOCTYPE html>
<html>
<head>
	<title>First WebMap</title>
	<link rel = "stylesheet" href = "https://js.arcgis.com/4.14/esri/themes/dark/main.css">
	<script src = 'https://js.arcgis.com/4.14'></script>
</head>
<body>
<script>
require (["esri/Map","esri/views/MapView","esri/widgets/Search","esri/widgets/Expand","esri/widgets/Bookmarks","esri/webmap/Bookmark"], 
		function(Map,MapView, Search,Expand,Bookmarks, Bookmark)
		{	
			 
			const map1 = new Map({basemap:"dark-gray"})
  
		    const mapview = new MapView({container: "carte", map: map1, 
			 center: [2.2505492158227987,48.82639566683736], zoom: 3});

	      const searchWidget = new Search({
	      	view: mapview
	      });
	      // Adds the search widget below other elements in
	      // the top left corner of the view
	      mapview.ui.add(searchWidget, {
	        position: "top-right",
	        index: 1
	      });
	      

	      const bookmarks = new Bookmarks({
	        view: mapview,
	        bookmarks: [
	          new Bookmark({
	            name: "Europe",
	            extent: {
	              spatialReference: {
	                wkid: 102100
	              },
	              xmin: -1569877.42,
	              ymin: 4419153.05,
	              xmax: 4378757.87,
	              ymax: 6879813.86
	            }
	          }),
	          new Bookmark({
	            name: "Asie",
	            extent: {
	              spatialReference: {
	                wkid: 102100
	              },
	              xmin: 5984627.89,
	              ymin: 1596931.21,
	              xmax: 17881898.47,
	              ymax: 6518252.84
	            }
	          }), new Bookmark({
	            name: "Afrique",
	            extent: {
	              spatialReference: {
	                wkid: 102100
	              },
	              xmin: -2814690.83,
	              ymin: -2081978.04,
	              xmax: 8182457.30,
	              ymax: 4620020
	            }
	          }), new Bookmark({
	            name: "Moyen-Orient",
	            extent: {
	              spatialReference: {
	                wkid: 102100
	              },
	              xmin: 1511963.70,
	              ymin: 1661959.86,
	              xmax: 12391704.56,
	              ymax: 5869053.90
	            }
	          }),
	          new Bookmark({
	            name: "Amérique",
	            extent: {
	              spatialReference: {
	                latestWkid: 3857,
	                wkid: 102100
	              },
	              xmin: -19424807.06,
	              ymin: -6466370.88,
	              xmax: 2843439.52,
	              ymax: 6937626.40
	            }
	          })
	        ]
	      });


	      const bkExpand = new Expand({
	        view: mapview,
	        content: bookmarks,
	        expanded: false
	      });

	      // Add the widget to the top-right corner of the view
	      mapview.ui.add(bkExpand, "top-right");
		})
</script>


<div id = 'carte' style = 'width:100%;height:800px'></div>
</body>
</html>