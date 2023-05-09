(function ($) {
  
    function filterProduct(
      ) {
        var  category= getCheckboxValues('category');
        var screen = getCheckboxValues('screen');
        var camera = getCheckboxValues('camera');
        var memory = getCheckboxValues('memory');
        var chip = getCheckboxValues('chip');
        var sorting = getCheckboxValues('sorting');
           var min_price = $("#min_price").val();
        var max_price = $("#max_price").val();
        $.ajax({
            url: "model/search_up_models.php",
            type: "POST",
            data: {
                min_price:min_price, max_price:max_price,category:category,screen:screen,camera:camera,memory:memory,chip:chip,sorting:sorting,page:page
            },
            success: function (data) {
                $("#search-up").html(data);
                $("#non-search-up").empty();
            }
        });
    }
  
    $('#price-range-submit').hide();
  
      $("#min_price,#max_price").on('change', function () {
  
        $('#price-range-submit').show();
  
        var min_price_range = parseInt($("#min_price").val());
  
        var max_price_range = parseInt($("#max_price").val());
  
        if (min_price_range > max_price_range) {
          $('#max_price').val(min_price_range);
        }
  
        $("#slider-range").slider({
          values: [min_price_range, max_price_range]
        });
        
      });
  
  
      $("#min_price,#max_price").on("paste keyup", function () {                                        
  
        $('#price-range-submit').show();
  
        var min_price_range = parseInt($("#min_price").val());
  
        var max_price_range = parseInt($("#max_price").val());
        
        if(min_price_range == max_price_range){
  
              max_price_range = min_price_range + 100000;
              
              $("#min_price").val(min_price_range);		
              $("#max_price").val(max_price_range);
        }
  
        $("#slider-range").slider({
          values: [min_price_range, max_price_range]
        });
  
      });
  
  
      $(function () {
        $("#slider-range").slider({
          range: true,
          orientation: "horizontal",
          min: 0,
          max: 50000000,
          values: [0, 50000000],
          step: 100000,
  
          slide: function (event, ui) {
            if (ui.values[0] == ui.values[1]) {
                return false;
            }
            
            $("#min_price").val(ui.values[0]);
            $("#max_price").val(ui.values[1]);
          }
        });
  
        $("#min_price").val($("#slider-range").slider("values", 0));
        $("#max_price").val($("#slider-range").slider("values", 1));
  
      });
  
      $("#slider-range,#price-range-submit").click(function () {
  
        var min_price = $('#min_price').val();
        var max_price = $('#max_price').val();
  
        // $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
      });

      function pagination() {
        var  category= getCheckboxValues('category');
        var screen = getCheckboxValues('screen');
        var camera = getCheckboxValues('camera');
        var memory = getCheckboxValues('memory');
        var chip = getCheckboxValues('chip');
        var sorting = getCheckboxValues('sorting');
           var min_price = $("#min_price").val();
        var max_price = $("#max_price").val();
        $.ajax({
          url: 'model/pagging_search_up_models.php',
          type: 'POST',
          data :{
            min_price:min_price, max_price:max_price,category:category,screen:screen,camera:camera,memory:memory,chip:chip,sorting:sorting
          },
          success: function (data) {
      
          if(data<=1){
            $('#midpagination').hide();
      
          }
          else{
            $('#midulpagi').empty();
            $('#midpagination').show();
            
            let pagi='';
            for( i=1;i<=data;i++){
              pagi+= '<li class="page-item" ><a class="page-link" href="#">'+i+'</a></li>';
              $('#midulpagi').empty(); $('#midulpagi').append(pagi);
             
            }
          }
          
          }
      
        })
      }
 
      function getCheckboxValues(checkboxClass){
        var values = new Array();
		$("."+checkboxClass+":checked").each(function() {
		   values.push($(this).val());
		});
        return values;
    }
    $("#search_form").submit(function(e){
   
filterProduct();
pagination() ;
//   $.ajax({
//     url: "model/search_up_models.php",
//     type: "POST",
//     data: {
//         min_price:min_price, max_price:max_price,category:category,screen:screen,camera:camera,memory:memory,chip:chip,sorting:sorting,page:page
//     },
//     success: function (data) {
//         $("#search-up").html(data);
//         $("#non-search-up").empty();
//     }
// });
  e.preventDefault();
    });

    $("#midulpagi").on("click", "li a", function (e) {
      e.preventDefault();
        page = $(this).text();
       
       filterProduct();
  
      });
  })(jQuery);