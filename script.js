
let currentAlbum;
let currentIndexImg;
let maxIndex;

function openImg(pathImg, album) {
  document.getElementById('carrousel').style.display = 'flex';
  const pathElements = pathImg.split('/');
  document.getElementById('diapo').style.backgroundImage = 'url(' + projectsSiteAddress + '/' + album + '/' + pathElements[pathElements.length - 1] + ')';
  currentAlbum = albums.get(album);
  currentIndexImg = currentAlbum.findIndex(element => element === projectsSiteAddress + '/' + album + '/' + pathElements[pathElements.length - 1]);
  maxIndex = currentAlbum.length - 1;
}

function closeImg() {
  document.getElementsByClassName('preview-box')[0].style.display = 'none';
}

function goToPreviousImg() {
  if (currentIndexImg > 0) {
    currentIndexImg--;
    document.getElementById('diapo').style.backgroundImage = 'url(' + currentAlbum[currentIndexImg] + ')';
  } else {
    document.getElementById('diapo').style.backgroundImage = 'url(' + currentAlbum[maxIndex] + ')';
    currentIndexImg = maxIndex;
  }
}

function goToNextImg() {
  if (currentIndexImg < maxIndex) {
    currentIndexImg++;
    document.getElementById('diapo').style.backgroundImage = 'url(' + currentAlbum[currentIndexImg] + ')';
  } else {
    document.getElementById('diapo').style.backgroundImage = 'url(' + currentAlbum[0] + ')';
    currentIndexImg = 0;
  }
}
