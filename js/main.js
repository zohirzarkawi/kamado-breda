
document.addEventListener('DOMContentLoaded', function() {
    const thumbnails = document.querySelectorAll('.thumb');
    const currentImage = document.getElementById('current-image');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function() {
            currentImage.src = this.src;
        });
    });
});