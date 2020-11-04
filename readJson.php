<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- Some div to append the result canvas later -->
    <div id="result-container"></div>
    
    <!-- Include the image-diff library -->
    <script src="image-diff.min.js"></script>
    
    <script>
    <?php
        $Json = file_get_contents("fileName.json");
        $myarray = json_decode($Json, true);
        foreach($myarray as $key1 => $value1){
            ?>
            console.log(`<?= $myarray[$key1][0]['name'] ?>`);
            <?php
        }
        ?>
        // // A flag variable to indicate wheter the 2 images were loaded or not
        // var loadedImages = 0;
        
        // // Create a variable from the first image
        // var ImageA = new Image();
        // ImageA.src = "404_boxart-52x72.jpg";
        
        // // Create a variable from the second image
        // var ImageB = new Image();
        // ImageB.src = "404_boxart-52x72.jpg";
        
        // /**
        //  * Callback that should be executed when the images are finally loaded.
        //  * 
        //  *  
        //  **/
        // var onImagesLoaded =  function () {
        //     // Increment the images loaded flag
        //     loadedImages++;
            
        //     // Skip execution of the callback if the 2 images have been not loaded
        //     // Otherwise continue with the diff
        //     if(loadedImages != 2){
        //         return;
        //     }
            
        //     // Create the image that shows the difference between the images
        //     var diff = imagediff.diff(ImageA, ImageB);
        //     // Create a canvas with the imagediff method (with the size of the generated image)
        //     var canvas = imagediff.createCanvas(diff.width, diff.height);
        //     // Retrieve the 2d context
        //     var context = canvas.getContext('2d');
        //     // Draw the generated image with differences on the canvas
        //     context.putImageData(diff, 0, 0);
        //     // Add the canvas element to the div element to show
        //     document.getElementById("result-container").appendChild(canvas);
            
        //     // Display some alert !
        //     var isEqual = imagediff.equal(ImageA, ImageB , 0);
            
        //     // True or False according to the images
        //     console.log(isEqual);
        // };
        
        // // Set the onLoad callback of the images
        // ImageA.onload = onImagesLoaded;
        // ImageB.onload = onImagesLoaded;
    </script>
</body>

</html>
