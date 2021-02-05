<?php 

//ATTIBUTI/PROPRIERA'
  class Book {
    public $title;
    public $cover;
    public $author;
    public $description;
    public $editor;
    public $review;
    public $price;
    public $publishedDate;
    public $pages;
    public $language;

        //COSTRUTTORE
      public function __construct($bookTitle, $bookAuthor, $bookPrice, $bookCover = " https://www.edt.it/sites/default/files/styles/product_cover/public/covers_hd/copertina_vuota.jpg?itok=B8cVKYS5") {
      $this->title = $bookTitle;
      $this->author = $bookAuthor;
      $this->price = $bookPrice;
      $this->cover = $bookCover;

    }
  }



  //$book1->title = "Il vecchio e il mare";
  //$book1->author = "Ernest Hemingway";
  //$book1->price = "12,00";

  $book1 = new Book("Il vecchio e il mare", "Ernest Hemingway", "12,00");
  $book1->cover = "https://www.mondadoristore.it/img/Il-vecchio-e-il-mare-Ernest-Hemingway/ea978880466787/BL/BL/01/NZO/?tit=Il+vecchio+e+il+mare&aut=Ernest+Hemingway";
  $book1->description = "Dopo ottantaquattro giorni durante i quali non è riuscito a pescare nulla, il vecchio Santiago trova la forza di riprendere il mare: questa nuova battuta di pesca rinnova il suo apprendistato di pescatore e sigilla la sua simbolica iniziazione. Nella disperata caccia a un enorme pesce spada dei Caraibi. nella lotta quasi a mani nude contro gli squali che un pezzo alla volta gli strappano la preda, lasciandogli solo il simbolo della vittoria e della maledizione finalmente sconfitta. Santiago stabilisce, forse per la prima volta, una vera fratellanza con le forze incontenibili della natura. E, soprattutto, trova dentro di sé il segno e la presenza del proprio coraggio, la giustificazione di tutta una vita. Postfazione di Fernanda Pivano.";
  $book1->editor = "Mondadori";
  $book1->review = "";
  $book1->publishedDate = "1 settembre 1952";
  $book1->pages = 138;
  $book1->language = "Italiano";
  var_dump($book1);

  $book2 = new Book("Il duca e io. Serie Bridgerton. 1.", "Quinn Julia", "14,50");
  $book2->description = "Londra, 1813. Simon Arthur Henry Fitzranulph Basset, nuovo duca di Hastings ed erede di uno dei titoli più antichi e prestigiosi d'Inghilterra, è uno scapolo assai desiderato. A dire il vero, è letteralmente perseguitato da schiere di madri dell'alta società che farebbero di tutto pur di combinare un buon matrimonio per le loro fanciulle in età da marito.";
  $book2->editor = "Mondadori";
  $book2->review = "";
  var_dump($book1);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>OOP</title>
</head>
<body>
  <section class="books">
    <div class="book">
      <img src="<?php echo $book1->cover;  ?>" alt="">
      <h3>   <?php echo $book1->title;  ?> </h3>
      <h4>   <?php echo $book1->author;  ?> </h4>
      <small> <?php echo $book1->price;  ?> €</small>
    </div>
    <div class="book">
      <img src="<?php echo $book2->cover;  ?>" alt="">
      <h3>   <?php echo $book2->title;  ?> </h3>
      <h4>   <?php echo $book2->author;  ?> </h4>
      <small> <?php echo $book2->price;  ?> €</small>
    </div>
  </section>
</body>
</html>