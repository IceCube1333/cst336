<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/style.css");
            body {
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Image Carousel</title>
         <?php
            $backgroundImage = "img/sea.jpg";
         ?>
    </head>
    
    <body>
        <?php
            if( !isset($imageURLs)) {
                echo "<h2> Type a keyword to display a slideshow <br/> with random images from Pixabay.com </h2>";
            } else {
                // Display Carousel Here
        
                for ($i = 0; $i < 5;$i++) {
                    do {
                        $randomIndex = rand(0, count($imageURLs));
                    }
                    while (!isset($imageURLs[$randomIndex]));
                    
                    echo "<img src='" . $imageURLs[rand(0,count($imageURLs))] . "' width='200' >";
                    unset($imageURLs[$randomIndex]);                
                }
            }
        ?>
        
        <form>
            <input type="text" name="keyword" placeholder="Keyword">
            <input type="submit" value="Submit" />
        </form>
        
        <?php
            if (isset($_GET['keyword'])) {
                echo "You searched for: " . $_GET['keyword'];
            }
            if (isset($_GET['keyword'])) {
                include 'api/pixabayAPI.php';
                $imageURLs = getImageURLs($_GET['keyword']);
                $backgroundImage = $imageURLs[array_rand($imageURLs)];
            }
            
        ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>