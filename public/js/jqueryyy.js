
function read(id) {
  $.ajax({
    url: 'model/mid_phone_models.php',
    type: 'get',
    data: {
      id: id,
      page:page
    },
    success: function (data) {
      $('#total').empty(data);
      $('#total').append(data);
     
    }

  })
}
function readdata(search) {
  $.ajax({
    url: 'model/search_models.php',
    type: 'get',
    data: {
      search:search,
      page:page
    },
    success: function (data) {
      $('#total').empty(data);
      $('#total').append(data);
    }

  })
}
function paginationsearch(search) {
  $.ajax({
    url: 'model/pagging_search_models.php',
    type: 'get',
    data: {
      search:search
    },
    success: function (data) {
    console.log(data);
    if(data<=1){
      $('#pagination').hide();

    }
    else{
      $('#ulpagi').empty();
      $('#pagination').show();
      
      let pagi='';
      for( i=1;i<=data;i++){
        pagi+= '<li class="page-item" ><a class="page-link" href="#">'+i+'</a></li>';
        $('#ulpagi').empty(); 
        $('#ulpagi').append(pagi);
       
      }
    }
    
    }

  })
}
function pagination() {
  $.ajax({
    url: 'model/pagging_models.php',
    type: 'get',
    data: {
      id:id
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

