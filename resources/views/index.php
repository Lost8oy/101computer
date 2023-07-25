<html>
  <head>
    <link rel="stylesheet" href="../css/styles.css">
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Voltaire&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monofett&display=swap">
  </head>
  <body>
  <div class="photo-container">
    <!-- Images will be inserted dynamically -->
  </div>

  <div class="overlay">
        <h1 class="title">microcomputer</h1>
        <p class="lead" style="font-size:1.25vw;">How Computers became Personal</p>
        <p class="lead"> <button class="bg-danger btn btn-link btn-sm fw-bold text-decoration-none text-white" type="button">Our Collection</button> </p>
  </div>

  <footer class="footer">
    <p>Coded with love by the Erasmus Team.</p>
</footer>

    <script type = "text/javascript">

      <?php
        $dp = opendir("photo");
        $arrayjs = array();
        while(false !== ($currentFile = readDir($dp))){
          if($currentFile != "." && $currentFile != ".."){
            $arrayjs[] = 'photo/'.$currentFile;
          }
        }
      ?>
      const images = <?php echo json_encode($arrayjs); ?>;
      const photoContainer = document.querySelector('.photo-container');
      const displayedImages = []; // Array to keep track of displayed images
let numPhotosPerRow;

function getRandomImage() {
  const remainingImages = images.filter(image => !displayedImages.includes(image));
  if (remainingImages.length === 0) {
    // If all images have been displayed, reset the displayedImages array
    displayedImages.length = 0;
  }

  const randomImage = remainingImages[Math.floor(Math.random() * remainingImages.length)];
  displayedImages.push(randomImage);
  return randomImage;
}

function createPhotoDiv(imageUrl) {
  const photoDiv = document.createElement('div');
  photoDiv.className = 'photo';

  const imgElement = document.createElement('img');
  imgElement.src = imageUrl;
  imgElement.alt = 'Image';

  photoDiv.appendChild(imgElement);
  return photoDiv;
}

function calculateNumPhotosPerRow() {
  const containerWidth = photoContainer.clientWidth;
  numPhotosPerRow = 6; // For larger screens, keep 6 pictures per row

  if (containerWidth <= 768) {
    numPhotosPerRow = 3; // For smaller screens (e.g., tablets), set 3 pictures per row
  }

  if (containerWidth <= 480) {
    numPhotosPerRow = 2; // For even smaller screens (e.g., smartphones), set 2 pictures per row
  }
}
function calculateNumRows() {
    const containerWidth = photoContainer.clientWidth;
    numRow = 3; // For larger screens, keep 6 pictures per row
  
    if (containerWidth <= 768) {
      numRow = 4; // For smaller screens (e.g., tablets), set 3 pictures per row
    }
  
    if (containerWidth <= 480) {
      numRow = 5; // For even smaller screens (e.g., smartphones), set 2 pictures per row
    }
  }

function insertInitialPictures() {
  calculateNumPhotosPerRow();
  calculateNumRows()

  for (let i = 0; i < numRow * numPhotosPerRow; i++) {
    const randomImage = getRandomImage();
    const photoDiv = createPhotoDiv(randomImage);
    photoContainer.appendChild(photoDiv);
  }
}

function changeRandomImage() {
  const randomImage = getRandomImage();
  const photoDivs = document.querySelectorAll('.photo');
  const randomDiv = photoDivs[Math.floor(Math.random() * photoDivs.length)];
  const imgElement = randomDiv.querySelector('img');
  imgElement.src = randomImage;
}

function updateLayout() {
  // Remove existing photos
  while (photoContainer.firstChild) {
    photoContainer.removeChild(photoContainer.firstChild);
  }

  insertInitialPictures();
}

// Insert initial pictures
insertInitialPictures();

// Change image every 3 seconds
setInterval(changeRandomImage, 3000);

// Update layout when window is resized
window.addEventListener('resize', updateLayout);
    </script>
  </body>
</html>