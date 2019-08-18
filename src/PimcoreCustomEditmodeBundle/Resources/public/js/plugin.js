/*global Class*/
/*global pimcore*/
pimcore.registerNS("pimcore.plugin.menusample");

pimcore.plugin.menusample = Class.create(pimcore.plugin.admin, {
  getClassName: function () {
    return "pimcore.plugin.menusample";
  },

  initialize: function () {
    pimcore.plugin.broker.registerPlugin(this);
  },

  prepareClassLayoutContextMenu: function (allowedTypes) {
    allowedTypes.panel.push('flexbox');
    allowedTypes.root.push('flexbox');
    allowedTypes.flexbox = ['flexitem'];
    allowedTypes.flexitem = allowedTypes.panel;

  },

  gw_custom_prepareClassLayoutRendering: function (validKeys) {
    validKeys.push('flex');
  }
});

var menusamplePlugin = new pimcore.plugin.menusample();
