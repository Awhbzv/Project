<?php
/**//*included header.php => db.php/config.php*//**/ 
include __DIR__ . '/include/header.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Blog IT_Minimalism!</title>
  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="media/assets/bootstrap-grid-only/css/grid12.css">

  <!-- Google Fonts -->
  <link href="https:fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="media/css/style.css">
</>
<body>

  <div id="wrapper">

  <?php


?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="/categories.php">All records</a>
              <h3>Newest in blog</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
       
        <?php
        // getting data from articles
        $articles = mysqli_query($connection, "SELECT * FROM `articles`". "ORDER BY" . 'id' . 'DESC LIMIT'  );

        // cheking succesfully connection
        if ($categories === false) {
            echo "Errorof getting connection: " . mysqli_error($connection);
            exit();
        }
        ?>
        <?php
        // getting data from articles
        $articles = mysqli_query($connection, "SELECT * FROM `articles`");

        // checking successfully connection
        if ($articles === false) {
            echo "Error of getting connection: " . mysqli_error($connection);
            exit();
        }
?>

<?php 
        while ($art = mysqli_fetch_assoc($articles)) {
?>
        <article class="article">
    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
    <div class="article__info">
        <a href="/article.php?id=<?php echo htmlspecialchars($art['id']); ?>"><?php echo htmlspecialchars($art['title']); ?></a>
        <div class="article__info__meta">
            <?php 
            $art_cat = false;
            foreach ($categories as $cat) {
                if ($cat['id'] == $art['categories_id']) {
                    $art_cat = $cat;
                    break;
                }  
            }

            // Check if category exists
            if ($art_cat !== false) {
            ?>
                <small>Category: <a href="/categorie.php?id=<?php echo htmlspecialchars($art_cat['id']); ?>"><?php echo htmlspecialchars($art_cat['title']); ?></a></small>
            <?php
            } else {
                // If no category found
                echo "<small>Category not found</small>";
            }
            ?>
        </div>
        <div class="article__info__preview"><?php echo mb_substr(htmlspecialchars($art['text']), 0, 50, 'utf-8'); ?></div>
    </div>
</article>
<?php          
}
?>
         

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #2</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #3</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #4</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                </div>
              </div>
            </div>

            <div class="block">
              <a href="#">All records</a>
              <h3>Security [Newest]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #2</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #3</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #4</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                </div>
              </div>
            </div>

            <div class="block">
              <a href="#">All records</a>
              <h3>Programming [Newest]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #2</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #3</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                      <a href="#">Title name #4</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Lifestyle</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

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

            <div class="block">
              <h3>Top read title`s</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Title name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Title name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Title name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Title name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Title name</a>
                      <div class="article__info__meta">
                        <small>Category: <a href="#">Programming</a></small>
                      </div>
                      <div class="article__info__preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ...</div>
                    </div>
                  </article>

                </div>
              </div>
            </div>

            <div class="block">
              <h3>Commentary</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                    <div class="article__image" style="background-image: url(media/images/post-image.jpg);"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

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
          <h1><?php echo $config['title']; ?></h1>
        </div>
        <nav class="footer__menu">
          <ul>
            <li><a href="#">Header</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Copyright</a></li>
          </ul>
        </nav>
      </div>
    </footer>

  </div>

</body>
</html>