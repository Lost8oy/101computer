<html>
  <head>
      <link rel="stylesheet" href="{{ asset('css/theme.css') }}" type="text/css" />
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&display=swap" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Voltaire&display=swap" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monofett&display=swap" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
          <!-- Scripts -->
          @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body style="overflow:hidden;">
    <div class="photo-container">
      <!-- Images will be inserted dynamically -->
    </div>
    <div class="bottom-bar">
      <p class="footer-text coded">Coded with <i class="fa fa-heart"></i> by the Erasmus Team.</p>
      {{$slot}}
    <script type="text/javascript">
      const images=[];

      <?php
        $dp = opendir("photo");
        $arrayjs = array();
        while (false !== ($currentFile = readDir($dp))) {
          if ($currentFile != "." && $currentFile != "..") {
            $arrayjs[] = 'photo/' . $currentFile; ?>
            images.push("<?php echo 'photo/' . $currentFile; ?>");
      <?php
        }
      }
      ?>

      //const images = ["photo\/img_0.jpg", "photo\/img_1.jpg", "photo\/img_10.jpg", "photo\/img_100.jpg", "photo\/img_101.jpg", "photo\/img_102.jpg", "photo\/img_103.jpg", "photo\/img_104.jpg", "photo\/img_105.jpg", "photo\/img_106.jpg", "photo\/img_107.jpg", "photo\/img_108.jpg", "photo\/img_109.jpg", "photo\/img_11.jpg", "photo\/img_110.jpg", "photo\/img_111.jpg", "photo\/img_112.jpg", "photo\/img_113.jpg", "photo\/img_114.jpg", "photo\/img_115.jpg", "photo\/img_116.jpg", "photo\/img_117.jpg", "photo\/img_118.jpg", "photo\/img_119.jpg", "photo\/img_12.jpg", "photo\/img_120.jpg", "photo\/img_121.jpg", "photo\/img_122.jpg", "photo\/img_123.jpg", "photo\/img_124.jpg", "photo\/img_125.jpg", "photo\/img_126.jpg", "photo\/img_127.jpg", "photo\/img_128.jpg", "photo\/img_129.jpg", "photo\/img_13.jpg", "photo\/img_130.jpg", "photo\/img_131.jpg", "photo\/img_132.jpg", "photo\/img_133.jpg", "photo\/img_134.jpg", "photo\/img_135.jpg", "photo\/img_136.jpg", "photo\/img_137.jpg", "photo\/img_138.jpg", "photo\/img_139.jpg", "photo\/img_14.jpg", "photo\/img_140.jpg", "photo\/img_141.jpg", "photo\/img_142.jpg", "photo\/img_143.jpg", "photo\/img_144.jpg", "photo\/img_145.jpg", "photo\/img_146.jpg", "photo\/img_147.jpg", "photo\/img_148.jpg", "photo\/img_149.jpg", "photo\/img_15.jpg", "photo\/img_150.jpg", "photo\/img_151.jpg", "photo\/img_152.jpg", "photo\/img_153.jpg", "photo\/img_154.jpg", "photo\/img_155.jpg", "photo\/img_156.jpg", "photo\/img_157.jpg", "photo\/img_158.jpg", "photo\/img_159.jpg", "photo\/img_16.jpg", "photo\/img_160.jpg", "photo\/img_161.jpg", "photo\/img_162.jpg", "photo\/img_163.jpg", "photo\/img_164.jpg", "photo\/img_165.jpg", "photo\/img_166.jpg", "photo\/img_17.jpg", "photo\/img_18.jpg", "photo\/img_19.jpg", "photo\/img_2.jpg", "photo\/img_20.jpg", "photo\/img_21.JPG", "photo\/img_22.jpg", "photo\/img_23.jpg", "photo\/img_24.jpg", "photo\/img_25.jpg", "photo\/img_26.jpg", "photo\/img_27.jpg", "photo\/img_28.jpg", "photo\/img_29.jpg", "photo\/img_3.jpg", "photo\/img_30.jpg", "photo\/img_31.jpg", "photo\/img_32.jpg", "photo\/img_33.jpg", "photo\/img_34.jpg", "photo\/img_35.jpg", "photo\/img_36.jpg", "photo\/img_37.jpg", "photo\/img_38.jpg", "photo\/img_39.jpg", "photo\/img_4.jpg", "photo\/img_40.jpg", "photo\/img_41.jpg", "photo\/img_42.jpg", "photo\/img_43.jpg", "photo\/img_44.jpg", "photo\/img_45.jpg", "photo\/img_46.jpg", "photo\/img_47.jpg", "photo\/img_48.jpg", "photo\/img_49.jpg", "photo\/img_5.jpg", "photo\/img_50.jpg", "photo\/img_51.jpg", "photo\/img_52.jpg", "photo\/img_53.jpg", "photo\/img_54.jpg", "photo\/img_55.jpg", "photo\/img_56.jpg", "photo\/img_57.jpg", "photo\/img_58.jpg", "photo\/img_59.jpg", "photo\/img_6.jpg", "photo\/img_60.jpg", "photo\/img_61.jpg", "photo\/img_62.jpg", "photo\/img_63.jpg", "photo\/img_64.jpg", "photo\/img_65.jpg", "photo\/img_66.jpg", "photo\/img_67.jpg", "photo\/img_68.jpg", "photo\/img_69.jpg", "photo\/img_7.jpg", "photo\/img_70.jpg", "photo\/img_71.jpg", "photo\/img_72.jpg", "photo\/img_73.jpg", "photo\/img_74.jpg", "photo\/img_75.jpg", "photo\/img_76.jpg", "photo\/img_77.jpg", "photo\/img_78.jpg", "photo\/img_79.jpg", "photo\/img_80.jpg", "photo\/img_81.jpg", "photo\/img_82.jpg", "photo\/img_83.jpg", "photo\/img_84.jpg", "photo\/img_85.jpg", "photo\/img_86.jpg", "photo\/img_87.jpg", "photo\/img_88.jpg", "photo\/img_89.jpg", "photo\/img_9.jpg", "photo\/img_90.jpg", "photo\/img_91.jpg", "photo\/img_92.jpg", "photo\/img_93.jpg", "photo\/img_94.jpg", "photo\/img_95.jpg", "photo\/img_96.jpg", "photo\/img_97.jpg", "photo\/img_98.jpg", "photo\/img_99.jpg", "photo\/wood.png"];

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
        imgElement.alt = imageUrl.replace('photo/','');;

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