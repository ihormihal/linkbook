var linkBook = function (config) {
	config = config || {};
	linkBook.superclass.constructor.call(this, config);
};
Ext.extend(linkBook, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('linkbook', linkBook);

linkBook = new linkBook();