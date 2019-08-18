/*global Class*/
/*global pimcore*/
/*global t */
pimcore.registerNS("pimcore.object.classes.layout.flexitem");

pimcore.object.classes.layout.flexitem = Class.create(pimcore.object.classes.layout.layout, {

  type: "flexitem",

  initialize: function (treeNode, initData) {
    this.type = "flexitem";

    this.initData(Object.assign(initData, {
      flex: 1
    }));

    this.datax = {
      name: t("flexitem"),
      datatype: "flexitem",
      fieldtype: this.getType()
    };

    this.treeNode = treeNode;
  },

  getTypeName: function () {
    return t("flexitem");
  },

  getIconClass: function () {
    return "pimcore_icon_inputQuantityValue";
  },

  getLayout: function ($super) {
    $super();

    this.layout.add(new Ext.Panel({
      bodyStyle: 'padding: 10px; border-top: 1px solid #606060 !important;',
      items: [
        {
          xtype: "numberfield",
          fieldLabel: t("flex"),
          name: "flex",
          value: this.datax.flex
        },
      ]
    }));

    return this.layout;
  },

  applyData: function ($super) {
    $super();
  },

});
