$(document).ready(function () {
debugger;
carregartabela();
function carregartabela() {
    $.ajax({   //Função AJAX
      url: base_url + "produtofindAllProdutos",   //Arquivo php
      type: "post",//Método de envio
      success: function (d) {
        if (isJson(d)) {
          carregaTabelaPessoa(d, "#ltProdutos");
        } else {
          console.log('Sem Produtos Cadastrados!');
        }
      }
    });
  };

  function carregaTabelaPessoa(data, tabela) {
    var tabelaSimples = tabela.split('#')[1];
    if (tabelaSimples != undefined) {
      $(tabela).html('');
    }
    if ($.fn.dataTable.isDataTable(tabela)) {
      table.destroy();
    }
    data = JSON.parse(data);
    var montouColunas = false;
    var arrColunas = [];
    var arrAtributosParcial = [];
    var arrAtributosTotal = [];
    var objColunas = {};
    var diaAnterior = false;
    for (var i = 0; i < Object.values(data).length; i++) {
      var arrAtributosParcial = [];
      for (var j = 0; j < Object.values(data[i]).length; j++) {
        if (montouColunas == false) {
          p = Object.keys(data[i])[j];
          objColunas = {}
          objColunas["title"] = p;
          if (j == 0 || j > 5) {
            objColunas["visible"] = false;
          }
          arrColunas.push(objColunas);
        }

        arrAtributosParcial.push(Object.values(data[i])[j]);
      }



      var attributes = data[i];
      if (arrColunas.length > 0) {
        montouColunas = true
      };
      arrAtributosTotal.push(arrAtributosParcial);
    }
    table = $(tabela).DataTable({
      data: arrAtributosTotal,
      columns: arrColunas,
      'paging': false, // Table pagination
      'ordering': true, // Column ordering
      'info': true, // Bottom left status text
      responsive: true,
      oLanguage: {
        sSearch: 'Pesquisar:',
        sLengthMenu: '_MENU_ registro por página',
        info: 'Mostrando página _PAGE_ de _PAGES_',
        sInfo: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        zeroRecords: 'Nada encontrado - desculpe',
        infoEmpty: 'Nenhum registro disponível',
        infoFiltered: '(Filtrado _MAX_ do total de registros)',
        oPaginate: {
          sNext: '<em class="fa fa-caret-right"></em>',
          sPrevious: '<em class="fa fa-caret-left"></em>'
        },
        select: true,
      },
      dom: 'Bfrtip',
      buttons: [
        { extend: 'copy', className: 'btn-info' },
        {
          extend: 'csv', className: 'btn-info', exportOptions: {
            columns: ':visible'
          }, title: 'Folha Ponto do mês de '
        },
        {
          extend: 'excel', className: 'btn-info', exportOptions: {
            columns: ':visible'
          }, title: 'Folha Ponto do mês de '
        },
        {
          extend: 'pdfHtml5', className: 'btn-info',
          exportOptions: {
            columns: ':visible'
          }, title: 'Folha Ponto do mês de '
        },
        {
          extend: 'print',
          exportOptions: {
            columns: ':visible'
          }, className: 'btn-info', title: 'Folha Ponto do mês de ',
        }
      ]
    });
  };

});