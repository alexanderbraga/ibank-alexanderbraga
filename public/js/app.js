new Vue({
    el: '#app',

    data: {
        products: []
    },

    mounted() {
        this.products = this.getAllProduct();
    },

    methods: {
        async getAllProduct() {
            axios.get('/products')
                .then(response => this.products = response.data)
                .catch(error => console.log(error));
        },
        async dropProduct(id) {
            try {
                await axios.delete(`${id}/products`, product);

                return this.getAllProduct();

            } catch (error) {
              console.error(error);
            }
        },
        async addProduct(product) {
            try {
                await axios.post('/products', product);

                return this.getAllProduct();

            } catch (error) {
              console.error(error);
            }
        }
    }
});