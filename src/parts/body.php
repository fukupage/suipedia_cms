<body>
  <header><a href="/note/suipedia_cms/">Suipedia CMS</a></header>
  <div class="headerFlexBlock"></div>
  <div class="container-fluid">
    <section class="container">
      <div class="row">
        <main class="col-md-8">
          <?php
          include_once(getRoot().getRequestURL()."c.php");
          ?>
        </main>
        <?php
        include_once(getRoot().$local_root.'/src/parts/sub.php');
        ?>
      </div>
    </section>
  </div>
  <footer>
    <p>&copy;2020<a href="/note/suipedia_cms/">Suipedia CMS</a></p>
  </footer>
</body>
