Ext.onReady(function() {
	linkBook.config.connector_url = OfficeConfig.actionUrl;

	var grid = new linkBook.panel.Home();
	grid.render('office-linkbook-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});