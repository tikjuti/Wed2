<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>
  <?php
  require("slide/mid_phone_slide.php")

    ?>
  <div class="container name mt-3 mb-3 ">
    <h4 class="p-3">Điện thoại
    </h4>
  </div>

  <div class="container pr-0 pl-0 bg-white container-product">
    <div class="container-fluid pr-0 pl-0 mb-4 mt-2 compoment ">
      <div class="d-flex flex-wrap" id="total">

      </div>
    </div>
    <nav aria-label="Page navigation example " id="midpagination">
      <ul class="pagination m-3 pb-3" id="midulpagi">

      </ul>
    </nav>
  </div>
  </div>

  <script>
    var id = <?php echo ($_GET['id']) ?>;
    var page = 1;
    $(document).ready(function () {
      read(id);
      pagination();
    });

    $("#midulpagi").on("click", "li a", function (e) {
      e.preventDefault();
      page = $(this).text();
      read(id);
      console.log($(this).text());
    });
  </script>
  <script script src="public/js/jqueryyy.js">
  </script>
</body>

</html>