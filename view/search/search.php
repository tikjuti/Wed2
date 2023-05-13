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
  require("view/slide/mid_phone_slide.php")
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
    <nav aria-label="Page navigation example " id="pagination">
      <ul class="pagination m-3 pb-3 " id="ulpagi">

      </ul>
    </nav>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">
    </script>
  <script>
    var page = 1;
    let search = $('#txtsearch').val();
    $(document).ready(function () {
      readdata(search);
      paginationsearch(search);
    });
    $('#txtsearch').on('keypress', function (e) {
      if (e.which === 13) {
        readdata(search);
        paginationsearch(search);
      }
    });
    $("#ulpagi").on("click", "li a", function (e) {
      e.preventDefault();
      page = $(this).text();
      readdata(search);
      console.log($(this).text())

    });
  </script>
  <script src="public/js/jquery.js">

  </script>
</body>

</html>