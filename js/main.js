document.addEventListener('polymer-ready', function() {
    var navicon = document.getElementById('navicon')
      , navigationPanel = document.getElementById('navigationPanel');
    
    navicon.addEventListener('click', function() {
        navigationPanel.togglePanel();
    });
});
