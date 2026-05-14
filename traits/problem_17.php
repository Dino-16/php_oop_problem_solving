<?php

/*
Problem 18: The "Sharable" Social Media Logic
Scenario: Your website has Video objects and Article objects. Both are very different, but both need a way to generate a "Share Link" for Facebook or Twitter.

Task: Create a Trait called Sharable.

The Trait:

Method shareToSocial($platform): Prints "Sharing [Title] to [Platform]..."

The Classes:

Class Video: Has a $title. Uses the Sharable trait.

Class Article: Has a $title. Uses the Sharable trait.

Challenge: Use $this->title inside the Trait method. (Traits can access properties of the class that uses them!)
*/
trait Sharable {

    public function shareToSocial($platform) {
        echo "Sharing $this->title to $platform" . PHP_EOL; 
    }
}

class Video {
    use Sharable;

    public $title;

    public function __construct($title) {
        $this->title = $title;
    }
}

class Article {
    use Sharable;

    public $title;

    public function __construct($title) {
        $this->title = $title;
    }
}

$video = new Video("Funny Cat Compilation");
$video->shareToSocial("Facebook");
$video->shareToSocial("Youtube");

$article = new Article("10 steps to  become PHP Developer");
$article->shareToSocial("Facebook");
$article->shareToSocial("Youtube");