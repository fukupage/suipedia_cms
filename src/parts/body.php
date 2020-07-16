<body>
  <header><a href="/">Suipedia CMS</a></header>
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
    <p>&copy;2020<a href="./">Suipedia CMS</a></p>
  </footer>
  <script src="asset/js/bootstrap.js"></script>
  <script src="asset/js/autosize.min.js"></script>
  <script src="asset/js/lightbox.js" type="text/javascript"></script>
  <script src="asset/js/script.js"></script>
</body>
