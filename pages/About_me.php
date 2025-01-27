<?php 
include "../include/db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Blog IT_Minimalism!</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="../media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https:fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"/>

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="../media/css/style.css">
</head>
<body>

  <div id="wrapper">

  <header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1><?php echo $config['title']; ?></h1>
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="../index.php">Home</a></li> <!-- home page  -->
              <li><a href="pages/About_me.php">About me</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <?php 
      $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`"); 
      ?>
      <div class="header__bottom">
        <div class="container">
          <nav>  
            <ul>
              <?php while ($cat = mysqli_fetch_assoc($categories)): ?>
                <li><a href="/categorie.php?id=<?php echo $cat['id']; ?>"><?php echo $cat['title']; ?></a></li>
              <?php endwhile; ?>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>About me</h3>
              <div class="block__content">
              <iframe src="https://assets.pinterest.com/ext/embed.html?id=154248355981371116" height="1167" width="600" frameborder="1000" scrolling="no" ></iframe>

                <div class="full-text">
                  <h1>Hi there!</h1>
                  <p>My name is Anar, and welcome to my little space on the web.</p>
                  <p>I’m a passionate programmer, currently diving deep into the world of coding with a focus on <strong>PHP</strong>. For me, programming isn’t just a career choice—it’s a way of solving problems, creating innovative solutions, and constantly expanding my skills. I’m always eager to learn more, challenge myself with new projects, and push my boundaries in the ever-evolving world of tech.</p>
                  <h2>My Hobbies</h2>
                  <h3>Gaming</h3>
                  <p>When I’m not in front of the screen, I love to escape into the world of video games. Gaming has been a major part of my life, and it continues to inspire my creativity. Some of my all-time favorite games include <em>Call of Duty</em>, <em>Skyrim</em>, <em>Red Dead Redemption 2</em>, and <em>Sid Meier’s Civilization</em>. I enjoy exploring vast, open-world landscapes, battling fierce opponents, and strategizing to dominate the game world.</p>
                  <h3>Music</h3>
                  <p>Music is another huge passion of mine. My taste in music is incredibly diverse, ranging from high-energy <strong>Dubstep</strong>, <strong>Trap</strong>, and <strong>Drill Rap</strong> to the timeless sounds of <strong>Classical Opera</strong> and <strong>Phonk</strong>. I also enjoy the rhythms of <strong>Techno</strong>, with its pulsating beats and mesmerizing synths. Some of my favorite tracks in this genre are those that help me relax and focus. I especially love <strong>Ambient music</strong> with its slow, monophonic but soulful sounds—tracks like "I Was Only Temporary," "Drowning," "This Feeling," and "Milk Cassette" create the perfect backdrop for moments of calm introspection.</p>
                  <p>I’m also a big fan of artists from all over the world. Growing up in Azerbaijan, I have a special connection to legendary Azerbaijani musicians like Rashid Behbutov, Shovket Elekberova, and Eldar Mansurov. Their timeless melodies and soulful voices inspire me both personally and creatively.</p>
                  <p>On a global scale, I love the raw energy and emotion of artists such as Eminem, The Notorious B.I.G., 2Pac, Lil Peep, and Kanye West. I’m also a fan of artists like Nemzzz, Xxxtentacion, Carla Morrison, Stromae, Major Lazer, Skrillex, Avicii, Rihanna, and Travis Scott. Each of these artists has uniquely influenced me, whether through their lyrics, beats, or ability to push boundaries in their genres. I also appreciate cinematic music, especially the powerful scores of Hans Zimmer, which transport me to another world.</p>
                  <h3>Books</h3>
                  <p>In addition to music and gaming, I love to read. Books have always been a source of inspiration and escape for me. Some of my favorites include <em>"Ali and Nino"</em>—a beautifully told love story set in Azerbaijan, <em>"My Last Letter to You"</em>, <em>"The Boy in the Striped Pajamas"</em>, <em>"Murder on the Orient Express"</em>, and <em>"The Sun Is Also a Star"</em>. These books have touched my heart in different ways, whether through their exploration of culture, history, or the human experience.</p>
                  <h2>Let’s Connect!</h2>
                  <p>I’m always looking for ways to grow, learn, and connect with others who share my interests. Whether it’s through programming, gaming, music, or literature, I’m excited to see where these passions take me in the future. If you’d like to connect, collaborate, or just chat about any of these topics, feel free to <a href="mailto:your.email@example.com">reach out</a>!</p>
                </div>
              </div>
            </div>

          </section>
          <section class="content__right col-md-4">
            <div class="block">
              <h3>Visitor`s Map</h3>
              <div class="block__content">
                <script type="text/javascript" id="mmvst_globe" src="https:mapmyvisitors.com/globe.js?d=6dFCn8xjM2NWAiB4pbpdZpl1BhHdLEj98RQUYRJ4MlQ"></script>
              </div>
            </div>

            </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <footer id="footer">
      <div class="container">
        <div class="footer__logo">
        </div>
        <nav class="footer__menu">
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Copyright</a></li>
          </ul>
        </nav>
      </div>
          <h1>Blog IT_Minimalism</h1>
        </div>
        <nav class="footer__menu">
          <ul> 
          </ul>
        </nav>
      </div>
    </footer>

  </div>

</body>
</html>
