/*global Class*/
/*global Ext*/
/*global pimcore*/
/*global t */
pimcore.registerNS('pimcore.object.classes.layout.flexbox');

pimcore.object.classes.layout.flexbox = Class.create(pimcore.object.classes.layout.layout, {

  type: 'flexbox',

  initialize: function (treeNode, initData) {
    this.type = 'flexbox';

    this.initData(Object.assign(initData, {
      layout: {
        align: 'stretch',
        type: 'hbox'
      }
    }));

    this.datax.name = t("flexbox");

    this.treeNode = treeNode;
  },

  getTypeName: function () {
    return t('flexbox');
  },

  getIconClass: function () {
    return 'pimcore_icon_sql';
  },

  getLayout: function ($super) {
    $super();

    var alignData = [
      ['-', ''],
      ['start', 'start'],
      ['center', 'center'],
      ['end', 'end'],
      ['stretch', 'stretch'],
    ];

    var alignStore = Ext.create('Ext.data.ArrayStore', {
      data: alignData,
      fields: [
        'display',
        'value'
      ]
    });

    var boxType = [
      ['vBox', 'vBox'],
      ['hBox', 'hBox'],
    ];

    var boxTypeStore = Ext.create('Ext.data.ArrayStore', {
      data: boxType,
      fields: [
        'display',
        'value'
      ]
    });

    this.layout.add(new Ext.Panel({
      bodyStyle: 'padding: 10px; border-top: 1px solid #606060 !important;',
      items: [
        {
          xtype: 'form',
          bodyStyle: "padding: 10px;",
          style: "margin: 10px 0 10px 0",
          items: [
            {
              xtype: 'checkbox',
              fieldLabel: t('fullscreen'),
              name: 'fullscreen',
              checked: this.datax.fullscreen,
            },
            {
              xtype: 'combo',
              fieldLabel: t('align'),
              name: 'align',
              value: this.datax.layout.align,
              store: alignStore,
              displayField: 'display',
              valueField: 'value',
              triggerAction: 'all',
              editable: false
            },
            {
              xtype: 'combo',
              fieldLabel: t('layoutType'),
              name: 'layoutType',
              value: this.datax.layout.type,
              store: boxTypeStore,
              displayField: 'display',
              valueField: 'value',
              triggerAction: 'all',
              editable: false
            },
          ]
        }
      ]
    }));


    this.layout.on('render', this.layoutRendered.bind(this));

    return this.layout;
  },

  applyData: function ($super) {
    $super();
  },

});
