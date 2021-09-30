// initialization of noty
      var markupDef = '<div class="g-mr-20"><div class="noty_body__icon"><i class="hs-admin-check"></i></div></div><div>Hi, welcome to Unify. This is example of Toastr notification box.</div>',
        opts = {
          type: 'success',
          layout: 'topRight',
          timeout: 7000,
          animation: {
            open: 'animated fadeIn',
            close: 'animated fadeOut'
          },
          closeWith: ['click'],
          text: markupDef,
          theme: 'unify--v1'
        };
  
      $('#toastrOptions').text('var newNoty = new Noty(' + JSON.stringify(opts, null, 2) + ').show();');
  
      //$('#showToast').on('click', function () {
		  function showToast(){
        var title = $('#notieTitle').val(),
          msg = $('#notieMessage').val(),
  
          type = $('[name="toasts"]:checked').val(),
          layout = $('[name="positions"]:checked').val(),
          theme = $('[name="theme"]:checked').val(),
  
          isCloseButton = $('#closeButton').is(':checked'),
          isProgressBar = $('#progressBar').is(':checked'),
          timeOut = $('#timeOut').val(),
  
          animationIn = $('#showMethod').val(),
          animationOut = $('#hideMethod').val(),
  
          markup = '<div class="g-mr-20"><div class="noty_body__icon"><i class="hs-admin-check"></i></div></div><div>' + title + '<br>' + msg + '</div>',
          resultMarkup = function () {
            if (title != '' && msg != '') {
              return markup;
            } else {
              return markupDef;
            }
          };
  
        opts = {
          type: type,
          layout: layout,
          timeout: isProgressBar == true ? timeOut : false,
          animation: {
            open: 'animated ' + animationIn,
            close: 'animated ' + animationOut
          },
          closeWith: isCloseButton == true ? ['click', 'button'] : ['click'],
          text: resultMarkup(),
          theme: theme != '' ? theme : 'unify--v1'
        };
  
        var newNoty = new Noty(opts).show();
  
        $('#toastrOptions').text('var newNoty = new Noty(' + JSON.stringify(opts, null, 2) + ').show();');
      }
	  //});
    //});