function setGalleryItemsSize() {
    width = $('.mlx-team-gallery-item').width();
    height = width*1.5
    $('.mlx-team-gallery-item').height(height);
    $('.mlx-team-member').height(height);
    $('.mlx-team-member').width(width);
    $('.mlx-team-member').css("top", -(height)-3);
}
setGalleryItemsSize();
$(window).resize(function () {
    setGalleryItemsSize();
});
