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

              <h3>Most intresting titles</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
                  <?php 
                  $articles = mysqli_query($connection, "SELECT * FROM articles". "ORDER BY" . 'id' . 'DESC LIMIT'  );
                  ?>                
                  <?php
             // getting data from articles
                  $articles = mysqli_query($connection, "SELECT * FROM articles". "ORDER BY" . 'id' . 'DESC LIMIT'  );
                  
             // cheking succesfully connection
                  if ($categories === false)
                   {
                  echo "Error of getting connection: " . mysqli_error($connection);
                  exit();
                   }
                  ?>
                  <?php
             // getting data from articles
                  $articles = mysqli_query($connection, "SELECT * FROM articles");
                   
             // checking successfully connection
                  if ($articles === false) {
                  echo "Error of getting connection: " . mysqli_error($connection);
                  exit();
                   }
                ?>

               <?php 
while ($art = mysqli_fetch_assoc($articles)) { 
    $imagePath = isset($art['image']) && !empty($art['image']) 
        ? '/test.ru/media/images/' . htmlspecialchars($art['image']) 
        : '/test.ru/media/images/default.jpg';
?>
<article class="article">
    <div class="article__image" style="background-image: url('<?php echo $imagePath; ?>');"></div>
    <div class="article__info">
        <a href="/article.php?id=<?php echo htmlspecialchars($art['id']); ?>">
            <?php echo htmlspecialchars($art['title']); ?>
        </a>
        <div class="article__info__meta">
            <small>
                <?php
                $category_query = "SELECT title FROM articles_categories WHERE id = " . (int)$art['categories_id'];
                $category_result = mysqli_query($connection, $category_query);
                $category = mysqli_fetch_assoc($category_result);
                echo $category ? htmlspecialchars($category['title']) : "No Category";
                ?>
            </small>
        </div>
        <div class="article__info__preview">
            <?php echo mb_substr(htmlspecialchars($art['text']), 0, 100, 'utf-8') . '...'; ?>
        </div>
    </div>
</article>
<?php } ?>

<?php /*                           Security newest Block                                          */?>
          <?php

// For example, we take only articles from a category with id = 1 or with a specific tag
$condition = "categories_id = 5"; // You can specify any SQL conditions here


// Get the latest articles that match a condition
$newest_articles_query = "SELECT * FROM articles WHERE $condition ORDER BY id DESC LIMIT 5";
$newest_articles = mysqli_query($connection, $newest_articles_query);

// Checking the success of the request

if ($newest_articles === false) {
    echo "Error: " . mysqli_error($connection);
    exit();
}
?>

<!-- HTML for displaying articles -->
<div class="newest-blog">
    <h2>Newest in Blog</h2>
    <div class="articles-list">
        <?php while ($article = mysqli_fetch_assoc($newest_articles)) { ?>
            <article class="article">
                <!-- Processing the image path -->
                <?php 
                $imagePath = isset($article['image']) && !empty($article['image']) 
                ? '/media/images/' . htmlspecialchars($article['image']) 
                : '/media/images/default.jpg';
                ?>
                <div class="article__image" style="background-image: url('/media/images/<?php echo htmlspecialchars($article['image']); ?>');"></div>
                <div class="article__info">
                    <a href="/article.php?id=<?php echo htmlspecialchars($article['id']); ?>">
                        <?php echo htmlspecialchars($article['title']); ?>
                    </a>
                    <div class="article__info__meta">
                        <small>
                            <?php
                            // Getting category name
                            $category_query = "SELECT title FROM articles_categories WHERE id = " . (int)$article['categories_id'];
                            $category_result = mysqli_query($connection, $category_query);
                            $category = mysqli_fetch_assoc($category_result);
                            echo $category ? htmlspecialchars($category['title']) : "No Category";
                            ?>
                        </small>
                    </div>
                    <div class="article__info__preview">
                        <?php echo mb_substr(htmlspecialchars($article['text']), 0, 100, 'utf-8') . '...'; ?>
                    </div>
                </div>
            </article>
        <?php } ?>
    </div>
</div>
                </div>
              </div>
            </div>
          </section>
          <section class="content__right col-md-4">
    <div class="block">
        <h3>Visitor's Map</h3>
        <div class="block__content">
            <script type="text/javascript" id="mmvst_globe" src="https:mapmyvisitors.com/globe.js?d=6dFCn8xjM2NWAiB4pbpdZpl1BhHdLEj98RQUYRJ4MlQ"></script>
        </div>
    </div>

    <!-- Sidebar: Top 5 Most Read Articles -->
    <div class="block">
        <h3>Top 5 Most Read Articles</h3>
        <div class="block__content">
            <div class="articles articles__vertical">
                <?php
                // Request to select the 5 most read articles, sorted by number of views
                $top_articles_query = "SELECT * FROM articles ORDER BY views DESC LIMIT 5";
                $top_articles = mysqli_query($connection, $top_articles_query);

                // Checking the success of the request
                if ($top_articles === false) {
                    echo "Error: " . mysqli_error($connection);
                    exit();
                }

                // Conclusion of the 5 most popular articles
                while ($article = mysqli_fetch_assoc($top_articles)) {
                ?>
                    <article class="article">
                        <div class="article__image" style="background-image: url('/media/images/<?php echo htmlspecialchars($article['image']); ?>');"></div>
                        <div class="article__info">
                            <a href="/article.php?id=<?php echo htmlspecialchars($article['id']); ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                            </a>
                            <div class="article__info__meta">
                                <small>
                                    <?php
                                    // Getting category name
                                    $category_query = "SELECT title FROM articles_categories WHERE id = " . (int)$article['categories_id'];
                                    $category_result = mysqli_query($connection, $category_query);
                                    $category = mysqli_fetch_assoc($category_result);
                                    echo $category ? htmlspecialchars($category['title']) : "No Category";
                                    ?>
                                </small>
                            </div>
                            <div class="article__info__preview">
                                <?php echo mb_substr(htmlspecialchars($article['text']), 0, 100, 'utf-8') . '...'; ?>
                            </div>
                        </div>
                    </article>
                <?php
                }
                ?>
                 
            </div>
        </div>
    </div>

            <div class="block">
              <h3>Commentary</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

                  <article class="article">
                  <div class="article__image" style="background-image: url('/media/images/<?php echo htmlspecialchars($article['image']); ?>');"></div>
                  <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                  <div class="article__image" style="background-image: url('/media/images/<?php echo htmlspecialchars($article['image']); ?>');"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                  <div class="article__image" style="background-image: url('/media/images/<?php echo htmlspecialchars($article['image']); ?>');"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                  <div class="article__image" style="background-image: url('/media/images/<?php echo htmlspecialchars($article['image']); ?>');"></div>
                    <div class="article__info">
                      <a href="#">Jonny Flame</a>
                      <div class="article__info__meta">
                        <small><a href="#">Title name #1</a></small>
                      </div>
                      <div class="article__info__preview">Bla bla bla bla bla bla and then i think some more bla bla bla ...</div>
                    </div>
                  </article>

                  <article class="article">
                  <div class="article__image" style="background-image: url('/media/images/<?php echo htmlspecialchars($article['image']); ?>');"></div>
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
    <!-- get footer data from footer.php by using include  -->
    <?php include __DIR__ . '/include/footer.php';?>

  </div>

</body>
</html>