<div id="app">
    <table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Descrição</th>
            <th scope="col">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="prod in products">
        <th scope="row">@{{ product.id }}</th>
        <td>@{{ product.title }}</td>
        <td>@{{ product.price }}</td>
        <td>@{{ product.quantity }}</td>
        <td>@{{ product.description }}</td>
        <td>
          <button 
            type="button" 
            class="btn btn-danger"
            @click="dropProduct(prod.id)">
            Excluir
          </button>
        </td>
        </tr>
    </tbody>
    </table>
</div>
