<?php 
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
  }

  $ilVecchiEIlMare = new Book();
  $ilVecchiEIlMare->title = "Il vecchio e il mare";
  $ilVecchiEIlMare->cover = "https://www.mondadoristore.it/img/Il-vecchio-e-il-mare-Ernest-Hemingway/ea978880466787/BL/BL/01/NZO/?tit=Il+vecchio+e+il+mare&aut=Ernest+Hemingway";
  $ilVecchiEIlMare->author = "Ernest Hemingway";
  $ilVecchiEIlMare->description = "Dopo ottantaquattro giorni durante i quali non è riuscito a pescare nulla, il vecchio Santiago trova la forza di riprendere il mare: questa nuova battuta di pesca rinnova il suo apprendistato di pescatore e sigilla la sua simbolica iniziazione. Nella disperata caccia a un enorme pesce spada dei Caraibi. nella lotta quasi a mani nude contro gli squali che un pezzo alla volta gli strappano la preda, lasciandogli solo il simbolo della vittoria e della maledizione finalmente sconfitta. Santiago stabilisce, forse per la prima volta, una vera fratellanza con le forze incontenibili della natura. E, soprattutto, trova dentro di sé il segno e la presenza del proprio coraggio, la giustificazione di tutta una vita. Postfazione di Fernanda Pivano.";
  $ilVecchiEIlMare->editor = "Mondadori";
  $ilVecchiEIlMare->review = "";
  $ilVecchiEIlMare->price = "12,00";
  $ilVecchiEIlMare->publishedDate = "1 settembre 1952";
  $ilVecchiEIlMare->pages = 138;
  $ilVecchiEIlMare->language = "Italiano";
  var_dump($ilVecchiEIlMare);

?> 
