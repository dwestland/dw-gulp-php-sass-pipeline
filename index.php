<?php
  $INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/includes/";
  $title = "Title goes here"; 
  $description = "Description goes here";
  $appendHead = ""
?>

<!DOCTYPE html>
<html lang="en">
<?php include($INC_DIR. "head.php"); ?>
<body>

<article class="page-wrapper">

  <?php include($INC_DIR. "header.php"); ?>

  <main>
    <article class="content-wrapper">
      <section>
        <h1>Section 1</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eius impedit voluptatem! Asperiores eum suscipit enim cumque delectus quam commodi laudantium, aliquid facere amet id veritatis voluptate! Recusandae atque deleniti dolor iste quia eos, nemo ratione adipisci, iure, magnam neque voluptatem quam repellendus sequi molestiae soluta architecto laborum unde tempore?</p>
      </section>
      <aside>
        <h3>Aside 1</h3>
        <p>Text...</p>
      </aside>
    </article>

    <div>
      Ad goes here
      <!-- <img src="/public/images/santa-monica-pier-header.jpg"> -->
    </div>

    <article class="content-wrapper">
      <section>
        <h2>Section 2</h2>
        <p>Text...</p>
      </section>
      <aside>
        <h3>Aside 2</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, architecto aliquam labore, reprehenderit provident et, voluptates itaque rem vitae harum minima molestiae deserunt odio. Ipsa!</p>
      </aside>
    </article>

  </main>

  <?php include($INC_DIR. "footer.php"); ?>

</article>
<script src="/js/main.js"></script>
</body>
</html>
