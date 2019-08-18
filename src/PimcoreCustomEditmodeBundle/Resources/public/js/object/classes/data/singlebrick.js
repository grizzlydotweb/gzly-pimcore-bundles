/*global Class*/
/*global pimcore*/
/*global t */
pimcore.registerNS("pimcore.object.classes.data.singlebrick");
pimcore.object.classes.data.singlebrick = Class.create(pimcore.object.classes.data.objectbricks, {

    type: "singlebrick",
    /**
     * define where this datatype is allowed
     */
    allowIn: {
        object: true,
        objectbrick: false,
        fieldcollection: false,
        localizedfield: false,
        classificationstore : false
    },

    initialize: function (treeNode, initData) {
        this.type = "singlebrick";

        this.initData(initData);

        // overwrite default settings
        this.availableSettingsFields = ["name","title","invisible","style","noteditable"];

        this.treeNode = treeNode;
    },

    getTypeName: function () {
        return t("singlebrick");
    },

    getGroup: function () {
        return "structured";
    },

    getIconClass: function () {
        return "pimcore_icon_singlebrick";
    },

    getLayout: function ($super) {
        $super();

        this.specificPanel.removeAll();

        console.log('layout', this.layout);
        return this.layout;
    },

    isValid: function ($super) {

        if(!$super()) {
            return false;
        }

        // underscore "_" ist not allowed!
        // reason: the backend creates a class with the name of this field, if it contains an _ the autoloader
        // isn't able to load this file
        var data = this.getData();
        if(data.name.match(/[_]+/)) {
            return false;
        }

        return true;
    },

    getData: function() {
        this.datax.phpdocType = '\\Pimcore\\Model\\DataObject\\Singlebrick';
        console.log('data', this.datax);
        return this.datax;
    },

    applySpecialData: function(source) {
        console.log('applySpecialData', source);
        if (source.datax) {
            if (!this.datax) {
                this.datax =  {};
            }
            Ext.apply(this.datax,
                {
                    allowedTypes: source.datax.allowedTypes,
                    maxItems: source.datax.maxItems
                });
        }
    },
});