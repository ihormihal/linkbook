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
			html: '<h2>' + _('linkbook') + '</h2>',
			cls: '',
			style: {margin: '15px 0'}
		}, {
			xtype: 'modx-tabs',
			defaults: {border: false, autoHeight: true},
			border: true,
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
