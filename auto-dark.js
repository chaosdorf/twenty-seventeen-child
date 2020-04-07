window.addEventListener('DOMContentLoaded', (event) => {
    if(window.matchMedia("(prefers-color-scheme: dark)").matches) {
        document.getElementsByTagName("body")[0].classList.add("colors-dark");
    }
});
