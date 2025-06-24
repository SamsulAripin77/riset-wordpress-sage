(function () {
    let _isLoading = false;
    Object.defineProperty(window, 'isLoading', {
        get() { return _isLoading; },
        set(val) {
            _isLoading = !!val;
            const loader = document.getElementById('global-loader');
            if (loader) {
                if (_isLoading) {
                    loader.classList.remove('hidden');
                } else {
                    loader.classList.add('hidden');
                }
            }
        }
    });
    window.isLoading = false;
})();