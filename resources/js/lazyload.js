import LazyLoad from 'vanilla-lazyload';

const lazyLoadInstance = new LazyLoad({
    callback_loaded: function (img) {
        img.closest('.animate-pulse').classList.remove('animate-pulse')
    },
});
