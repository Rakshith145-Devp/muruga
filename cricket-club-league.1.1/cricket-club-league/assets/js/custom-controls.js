(function(api) {

    api.sectionConstructor['cricket-club-league-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);