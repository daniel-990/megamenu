const datosAirtableApp = () => {
  const urlDatos = `https://api.airtable.com/v0/app5rxt8CT9jhIkSv/consolidado3?api_key=keyFEarKdErHe2bsE`;
  // Make a request for a user with a given ID

  const btnMenu = $("#boton-menu");
  let menuPrpal = $("#menu-prpal li");

  btnMenu.on('click', function(){
    $("#menu-categorias").slideToggle("");
  });

  axios
    .get(urlDatos)
    .then(function (response) {
        //console.log(response);
      //handle success
      const datosAirtable = response.data.records;
        //console.log(datosAirtable);

      datosAirtable.map(items => {
        console.log(items);

        const renderMega2 = document.getElementById("render-mega-2");
        //variables
        const nombresCat = items.fields.nombres;
        const nombresCatId = items.fields.id;
        const catUrl = items.fields.url;
        // ------

        $(".cocina").show();
        
        $(".relojes_decorativos").hide();
        $(".apliques_de_pared").hide();
        $(".lamparas_decorativas").hide();
        $(".floreros").hide();
        $(".portaretratos").hide();
        $(".tapetes").hide();
        $(".cojines").hide();
        $(".follaje_artificial").hide();
        $(".cuadros").hide();
        $(".espejos").hide();
        $(".relojes").hide();
        $(".jardineria").hide();
        $(".mobiliario").hide();
        $(".elementos_decorativos").hide();

        menuPrpal.on('click', function(){
          const datos = $(this).attr("data_id");
          if(datos == nombresCatId){
            $(`.${nombresCatId}`).show("fast");
          }else{
            $(`.${nombresCatId}`).hide("fast");
          }
        });

        renderMega2.innerHTML += `
          <div class="col ${nombresCatId}">
            <p class="titulo-subcategorias">${nombresCat}</p>
            <hr>
            <ul class="ul_principal">
              ${catUrl.join("")}
            </ul> 
          </div>
        `;

      });
    })
    .catch(function(error){
      // handle error
      console.log(error);
    })
    .then(function(){
      // always executed
        console.log("se jecuta");
    });

};

//init(1);
datosAirtableApp();
