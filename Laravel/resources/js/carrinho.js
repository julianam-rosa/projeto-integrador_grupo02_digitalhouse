function carrinhoRemoverProduto(idPedido, idProduto, item){
    $('#form-remover-produto input[name="pedido_id"]').val(idPedido);
    $('#form-remover-produto input[name="products_id"]').val(idProduto);
    $('#form-remover-produto input[name="item"]').val(item);
    $('#form-remover-produto').submit();
}

function carrinhoAdicionarProduto(idProduto){
    $('#form-adicionar-produto input[name="id"]').val(idProduto);
    $('#form-adicionar-produto').submit();
}