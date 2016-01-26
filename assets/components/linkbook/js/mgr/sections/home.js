linkBook.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'linkbook-panel-home', renderTo: 'linkbook-panel-home-div'
		}]
	});
	linkBook.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(linkBook.page.Home, MODx.Component);
Ext.reg('linkbook-page-home', linkBook.page.Home);