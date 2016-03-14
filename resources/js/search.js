var timer;

function up() {

     timer = setTimeout(function() {
         var keywords = $("#search-input").val();

         if(keywords.length>0){
             $.post("http://localhost:8000/articles/executeSearch", {keywords: keywords}, function(markup){

             });
         }

     },500 );
}

function  down(){
    clearTimeout(timer);
}