//alert("je suis dans le script derniere phase");

// recupere du java au php
// envoie la recette par la methode post
function add_recette(title) {
   alert('ajout article ' + title);  // The function returns the product of p1 and p2

   $.ajax({
      url: 'ajouter_recettes.php',
      type: 'POST',
      data: { recette : title },

      success: function(output){
         alert(output);
      }
   });
}

// envoie la recette  apartir de lobject javascript Onclock
function diminuer_qte(title) {
   alert('diminution quantite ' + title);  // The function returns the product of p1 and p2

   $.ajax({
      url:'diminuer_qte.php',
      type: 'POST',
      data: { recette : title },

      success: function(output){
         alert(output);
         document.location.reload();
      }
   });
}


