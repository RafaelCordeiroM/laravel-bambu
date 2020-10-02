let View = (function() {
    let DOMstrings = {

    }

    return {
        DOMstrings: DOMstrings
    }
})();
let Modal = (function() {

    return {

    }
})();
let Controller = (function(Modal, View) {
    let DOM = View.DOMstrings;
    let setupEventListeners = function() {

    }

    return {
        init: function() {
            setupEventListeners();
        }
    }
})(Modal, View);

Controller.init();