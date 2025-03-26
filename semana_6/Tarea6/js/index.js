function startLoading() {
    const loadingBar = document.getElementById('loadingBar');
    loadingBar.style.width = '100%';
    setTimeout(() => {
        loadingBar.style.width = '5%'; 
    }, 1500);
}