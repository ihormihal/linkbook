linkBook.panel.Home = function (config) {
	config = config || {};
	Ext.apply(config, {
		baseCls: 'modx-formpanel',
		layout: 'anchor',
		/*
		 stateful: true,
		 stateId: 'linkbook-panel-home',
		 stateEvents: ['tabchange'],
		 getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
		 */
		hideMode: 'offsets',
		items: [{
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: false,
			hideMode: 'offsets',
			items: [{
				title: _('linkbook_items'),
				layout: 'anchor',
				items: [{
					html: _('linkbook_intro_msg'),
					cls: 'panel-desc',
				}, {
					xtype: 'linkbook-grid-items',
					cls: 'main-wrapper',
				}]
			}]
		}]
	});
	linkBook.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(linkBook.panel.Home, MODx.Panel);
Ext.reg('linkbook-panel-home', linkBook.panel.Home);
