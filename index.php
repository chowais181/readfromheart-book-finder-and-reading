<?php
include "init.php"; 

if(isset($_SESSION['id'])){
  include "header2.html"; 
}else{
  include "header.html" ;
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>read from heart</title>
 
  <link rel="stylesheet" href="css/index_style.css">
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="javascript/header_js.js"></script>

</head>
<body>
<?php include "cookie.php" ?>

<div class="wrapper">
  <section id='steezy'>
    <h2> Read From Heart</h2>
      <p>
        <br>
        Books are important for the mind, heart, and soul.
        Books are the plane, and the train, and the road.<br>
        They are the destination, and the journey. They are home.<br> 
        Writing and reading decrease our sense of isolation. They deepen and widen and expand our <br> 
        sense of life: They feed the soul. When writers make us shake our heads with the exactness<br> 
        of their prose and their truths, and even make us laugh about ourselves or life,<br> 
        our buoyancy is restored. We are given a shot at dancing with, or at least clapping along with,<br> 
        the absurdity of life, instead of being squashed by it over and over again.<br> 
        It’s like singing on a boat during a terrible storm at sea. You can’t stop the raging storm,<br> 
        but singing can change the hearts and spirits of the people who are together on that ship.<br><br>
      <img src="graphics/image_index.jpeg" width="750px"><br><br>
     </p>
  </section>

  <section id='real'>
    <h2> Read More Learn More</h2>
      <p>
        A reader, tomorrow a leader.” – Margaret Fuller<br>
        “A word after a word after a word is power.” – Margaret Atwood<br>
        “One glance at a book and you hear the voice of another person, perhaps someone dead for 1,000 years.<br> To read is to voyage through time.” – Carl Sagan<br>
        “Show me a family of readers, and I will show you the people who move the world.” – Napoleon Bonaparte<br>
        “A book is a garden, an orchard, a storehouse, a party, a company by the way, a counselor, a multitude of counselors.” – Charles Baudelaire<br>
        “When I look back, I am so impressed again with the life-giving power of literature.<br> If I were a young person today, trying to gain a sense of myself in the world,<br> I would do that again by reading, just as I did when I was young.” – Maya Angelou<br>
        “Let’s be reasonable and add an eighth day to the week that is devoted exclusively to reading.” – Lena Dunham<br>
        “If you don’t like to read, you haven’t found the right book.” – J.K. Rowling<br>
        “I can feel infinitely alive curled up on the sofa reading a book.” – Benedict Cumberbatch<br>
        “Some books leave us free and some books make us free.” – Ralph Waldo Emerson<br><br><br>
        <img src="graphics/reading-quotes.jpg" width="750px"><br><br>
      </p>
  </section>

  <section id='big'>
    <h2>Reading is important</h2>
      <p>
        That is part of the beauty of all literature. You discover that your longings are <br>
        universal longings, that you’re not lonely and isolated from anyone. <br>
        “The reading of all good books is like a conversation with the finest minds of past centuries.” – Rene Descartes<br>
        “That’s the thing about books. They let you travel without moving your feet.” – Jhumpa Lahiri<br>
        “I love the way that each book — any book — is its own journey. You open it, and off you go…” – Sharon Creech<br>
        “Reading is an exercise in empathy; an exercise in walking in someone else’s shoes for a while.” – Malorie Blackman<br>
        “Reading is a form of prayer, a guided meditation that briefly makes us believe we’re someone else,<br>
        disrupting the delusion that we’re permanent and at the center of the universe.<br>
        Suddenly (we’re saved!) other people are real again, and we’re fond of them.” – George Saunders<br>
        “A great book should leave you with many experiences, and slightly exhausted at the end.<br>
        You live several lives while reading.” – William Styron<br>
        “I guess a big part of serious fiction’s purpose is to give the reader,<br>
        who like all of us is sort of marooned in her own skull, to give her imaginative <br>
        access to other selves.” – David Foster Wallace<br><br><br>
        <img src="graphics/reading-quotes-2.jpg" width="750px"><br><br>
        “Reading is escape, and the opposite of escape; it’s a way to make<br> contact with reality
        after a day of making things up, and it’s a way of making contact with someone else’s <br>
        imagination after a day that’s all too real.” – Nora Ephron<br>
        “Reading makes immigrants of us all. It takes us away from home, but more important,<br>
        it finds homes for us everywhere.” – Jean Rhys<br>
        “Salvation is certainly among the reasons I read. Reading and writing have always pulled me out of the<br>
        darkest experiences in my life.<br>
        Stories have given me a place in which to lose myself. They have allowed me to remember. They have allowed <br>
        me to forget. They have allowed me to imagine different endings and better possible worlds.” – Roxane Gay<br>
        “You think your pain and your heartbreak are unprecedented in the history of the world, but then you read.<br>
        It was books that taught me that the things that tormented me most were the very things that connected me<br>
        with all the people who were alive, who had ever been alive.” – James Baldwin<br><br><br>
      </p>
  </section>

</div>
</body> 
</html>

<?php include "footer.html" ?>
