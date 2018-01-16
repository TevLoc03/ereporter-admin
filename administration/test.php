<form action="" methode="post" name="form">
<input type="text" name="idArticle"></br>
<input type="text" name="titreArticle"></br>
<input type="text" name="corpsArticle"></br>
<input type="text" name="idCategorie"></br>
<input type="text" name="idUser"></br>
<input type="submit" value="envoyer">

</form>

<script src="vendor/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function(){

$(document).on('submit', 'form', function(){

    $.fn.serializeObject = function()
{
   var o = {};
   var a = this.serializeArray();
   $.each(a, function() {
       if (o[this.name]) {
           if (!o[this.name].push) {
               o[this.name] = [o[this.name]];
           }
           o[this.name].push(this.value || '');
       } else {
           o[this.name] = this.value || '';
       }
   });
   return o;
};


 var   form_data=JSON.stringify($(form).serializeObject());

 console.log(form_data);
$.ajax({
    url: "http://webngraf.com/api/product/create.php",
    type : "POST",
    contentType : 'application/json',
    data : form_data,
    success : function(result) {
        // product was created, go back to products list
        console.log(result);
    },
    error: function(xhr, resp, text) {
        // show error to console
        console.log(xhr, resp, text);
    }

    

});


})



});


</script>