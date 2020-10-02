/**
 * VIEW
 */
let ViewMVC = (function() {
    let DOMstrings = {
        spanProduct: document.getElementsByClassName('icon-view'),
        btnViewProduct: document.querySelector('.btn-view-product'),
        imageProductModal: document.querySelector('#imagepreview'),
        modalImageProduct: document.querySelector('#imagemodal'),
        sidebar: document.querySelector('#sidebar'),
        sidebarFilter: document.querySelector('#sidebar-filter'),
    }

    return {
        DOMstrings: DOMstrings,
        setModal: function(obj) {
            console.log(Model.getDataById(obj.target.dataset.id))

        }
    }
})();

/**
 * MODAL
 */
let ModelMVC = (function() {

    return {

    }
})();

/**
 * CONTROLLER
 */
let ControllerMVC = (function(model, view) {
    let DOM = view.DOMstrings;

    function showImagesListener() {
        let images = DOM.spanProduct;
        images = Array.from(images);
        images.forEach((el) => {
            el.addEventListener('click', view.setModal);
        });
    }
    let setListeners = function() {
        showImagesListener();
    }
    return {
        init: function() {
            setListeners();
        }
    }
})(ModelMVC, ViewMVC);

ControllerMVC.init();