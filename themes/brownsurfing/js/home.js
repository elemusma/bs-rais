diagonalBottomLeft = document.querySelector('.diagonal-bottom-left');
diagonalBottomRight = document.querySelector('.diagonal-bottom-right');
diagonalLeftLineThree = document.querySelector('.diagonal-left-line.three');
// console.log(diagonalBottomLeft);

function parallaxEffect(){
    scrollLength=window.scrollY;
    diagonalBottomLeftPosition = 0;
    diagonalBottomLeftPositionLine = -290;
    diagonalBottomLeftPositionScroll = diagonalBottomLeftPosition + scrollLength/3;
    diagonalBottomLeftPositionScrollLess = diagonalBottomLeftPositionLine + scrollLength/15;
    // console.log(diagonalBottomLeftPositionScroll);
    diagonalBottomLeft.style.transform = "rotate(0deg) translate(100px, " +  diagonalBottomLeftPositionScroll + "px)";
    diagonalBottomRight.style.transform = "rotate(0deg) translate(100px, " +  diagonalBottomLeftPositionScroll + "px)";
    diagonalLeftLineThree.style.transform = "rotate(45deg) translate(0px, " +  diagonalBottomLeftPositionScrollLess + "px)";
}
window.addEventListener('scroll',parallaxEffect);