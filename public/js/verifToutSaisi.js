$("#donnees").on('submit', function(e) {

  e.preventDefault();

  var choix_troupeau = false;
  var eff_troupeau = false;
  var nom_parcelle = false;
  var sup_parcelle = false;
  $("#donnees input").each(function() {

    if($(this).attr('name') == 'troupeau') {

      if($(this).prop('checked') == true) {

        choix_troupeau = true;

      }

    } else if($(this).attr('name') == 'effectif') {

      if(!isNaN(parseInt($(this).val()))){

        eff_troupeau = true
      }

    } else if($(this).attr('name') == 'parcelle_nom_0') {
      if($(this).val()) {
        nom_parcelle = true;
      }

    } else if($(this).attr('name') == 'parcelle_superficie_0') {
      if(!isNaN(parseInt($(this).val()))){

        sup_parcelle = true
      }
    }

  });


  var manque ='';

  if (!choix_troupeau) { manque += "choix du troupeau, "}
  if(!eff_troupeau) { manque += "effectif du troupeau, "}
  if(!nom_parcelle) {manque +="nom de la parcelle, "}
  if(!sup_parcelle) {manque += "superficie de la parcelle, "}

  if(manque.length > 0) {

    $.alert({
      theme: 'dark',
      type: 'red',
      title: "Attention il manque des données",
      content: manque,
    });
  } else {

    $("#donnees").submit();
  }

})
