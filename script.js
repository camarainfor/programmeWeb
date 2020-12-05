//alert("je suis dans le script");

// recupere du java au php
function add_recette(title) {
   alert('ajout article ' + title);  // The function returns the product of p1 and p2

   $.ajax({
      url: 'ajouter_recette.php',
      type: 'POST',
      data: { recette : title },

      success: function(output){
         alert(output);
      }
   });
}

function diminuer_qte(title) {
   alert('diminution quantite ' + title);  // The function returns the product of p1 and p2

   $.ajax({
      url: 'diminuer_qte.php',
      type: 'POST',
      data: { recette : title },

      success: function(output){
         alert(output);
         document.location.reload();
      }
   });
}


