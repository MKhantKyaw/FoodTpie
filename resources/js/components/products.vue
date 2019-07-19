<template>
    <div>

<!--  This is Product table -->
        <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800 mt-3">Products</h1>
          <p class="mb-4">There are currently <b> [numbers] </b> users in FoodTPie.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-3" id="backToTable">
            <div class="card-header">
              <h3 class="m-0 font-weight-bold text-primary" style="float:left;">Products</h3>
            <button style="float:left; margin-left:75%;" class="btn btn-success btn-lg"> <a href="#editForm"> Add Product 
            <span style="color:white; font-weigth:bolder;"> + </span></a> </button>
            </div>
            <input type="text" v-model="searchProduct" placeholder="Search products here" class="input-group input-group-sm ml-4 mt-3 col-sm-10">
            <div style="clear:both;"></div>
            <div class="card-body">
              <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                            <th>ID</th>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>$$$</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr v-for="product in filteredProducts" v-bind:key="product.id" align="center">
                                <td> {{ product.id }} </td>
                                <td> {{ product.name }} </td>
                                <td> <img class="rounded img-thumbnail" :src="product.image" alt="no image"></td>
                                <td> {{ product.category }} </td>
                                <td> {{ product.price }} </td>
                                <td v-if="product.show === 0"> Unavailable </td>
                                <td v-else-if="product.show === 1"> Available </td>
                                <td v-else> Limited </td>
                                <td> 
                                    <div style="margin-top:3%;">
                                        <button @click="editProduct(product)" class ="btn btn-warning btn-sm"> <a href="#editForm"> Edit  </a></button>
                                        <button @click="deleteProduct(product.id)" class ="btn btn-danger btn-sm"> Delete </button>
                                    </div>
                                </td>
                                </tr>
                        </tbody>
                        </table>
                         <ul class="pagination">
                                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"> 
                                        <a class="page-link" href="#" @click="getProduct(pagination.prev_page_url)"> Previous </a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link text-dark" href="#">
                                        Page {{pagination.current_page}} of {{pagination.last_page}}</a> </li>
                                    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"> 
                                        <a class="page-link" href="#" @click="getProduct(pagination.next_page_url)"> Next </a>
                                    </li>
                         </ul>
                   </div>
                </div>
          </div>
    <!-- end of table -->

    <!-- Input Form -->        
        
    <!-- <div class="modal fade" role="dialog" id="editModal"> -->

    <form @submit.prevent="addProduct" class="card mt-3" style="width:70em; height:25rem; margin-left:3em;" id="editForm"> 
        
        <div class="card-body form-group form-group-sm col-sm-10" align="center" style="margin-left:3em;">
                    
                    <div class="card-title">
                        <h2 class="mt-3 font-weight-bold text-primary">Product</h2>
                    </div>
                       
                 <input type="text" v-model="product.name" class="form-control" placeholder="Product Name">

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" @change="onFileSelected">
                            <label class="custom-file-label" for="inputGroupFile01">{{product.image}}</label>
                        </div>
                    </div>
                <select v-model="product.category" class="mt-3 form-control">
                        <option disabled value="">Please Select Category</option>
                        <option>main dish</option>
                        <option>side dish</option>
                        <option>dessert</option>
                        <option>drinks</option>
                </select>
                <input type="text" v-model="product.price" class="form-control mt-3" placeholder="Product Price">
                <br>
                <input type="radio" v-model.number="product.show" value="0" :checked="this.product.show === 0"> <label for="unavailable">Unavailable</label> 
                <input type="radio" v-model.number="product.show" value="1" :checked="this.product.show === 1"> <label for="available">Available</label> 
                <input type="radio" v-model.number="product.show" value="2" :checked="this.product.show === 2"> <label for="limited">Limited</label> 
                <br>
                <div class="mt-3" align="center">
                <button type="submit" class="btn btn-lg btn-info">Save Product</button>
                <button @click="clearForm()" class="btn btn-lg btn-info"> <a href="#backToTable" class="cancel"> Cancel </a></button>
                </div>
                <br>

            </div>
           </form>
        <!-- </div>   modal end  -->
         <!--   end of input form -->
    </div>
     
</template>

<style scoped>
a {
    text-decoration: none;
    color: black;
}
.cancel:hover{
    text-decoration: none;
    color:white;
}

img{
    width:80px;
    height:80px;
    align-content: center;
}
</style>


<script>

export default {
    data()
    {
        return{
             products:[], //array
             product: { id:'', name:'' , image:'Choose image', category:'', price:'' , show:'' }, //object
             product_id:'',
             pagination: {},
             edit:false,
             searchProduct: '',
             imageFile:null,
            imageName:''
        }
    },
    
    created(){
        this.getProduct();
    },

    methods:{

        onFileSelected(event){
             this.imageFile = event.target.files[0];
             this.product.image = event.target.files[0].name;
             console.log(this.imageFile);
             console.log(this.product.image);
        },

        getProduct(page_url) {
            let me = this;
            page_url = page_url || 'api/products'
            fetch(page_url)
                .then(res => res.json())
                .then( res => {
                    this.products = res.data;
                    me.makePagination(res.meta,res.links);
                     this.clearForm();
                })
                .catch(err => console.log(err));
        },

        makePagination( meta, links ) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev     
            }
            this.pagination = pagination;
        },

       deleteProduct(id) {
           swal.fire({
               title: 'Are you sure you want to delete this?',
               text: "You won't be able to retrieve this!",
               type: 'warning',
               showCancelButton : true,
               confirmButtonColor : '#3085d6',
               confirmButtonText : 'Yes, Delete It'
           }).then((result) =>{
               if(result.value){

                    //delete
                    fetch(`api/product/${id}` , {
                   method:'delete'
                })
               .then(res => res.json)
               .then( data =>{
                   toast.fire({
                    type: 'success',
                    title: 'Deleted product successfully'
                    })
                   this.getProduct();
                   this.clearForm();
               })
               .catch(err => console.log(err));
                swal.fire(
                    'Deleted!',
                    'Product is deleted',
                    'success'
                )
               }//end of if
           })  
                
           
       },

       addProduct(){
           if(this.edit === false) {
               //Add new product

            axios({
                method: 'post',
                url: 'api/product',
                data: this.product
            }).then(res => {
               console.log('First stage is saved');
                
                 this.addImage();
                this.getProduct();
                toast.fire({
                    type: 'success',
                    title: 'Saved product successfully'
                    })
                //  this.clearForm();
            }).catch(err => console.log(err));
           }else{
               //update
                axios({
                 method : 'put',
                 url : 'api/product/'+this.product.id,
                 data : this.product,
             }).then(res => {
                 
                    this.addImage();
                    this.getProduct();
                    toast.fire({
                    type: 'success',
                    title: 'Updated product successfully'
                    })
                    // this.clearForm();
             }).catch(err => console.log(err));
           }
       },

        addImage(){
            let imageData = new FormData();
            imageData.append('imageFile',this.imageFile);
             const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }
            axios.post('api/image',imageData,config)
            .then(res => {
                  this.clearForm();
                // alert('Product is saved');
                // this.getProduct();
            }).catch( err => console.log(err));
        },

       editProduct(product){
           this.edit = true;
           this.product.id = product.id;
           this.product_id = product.id;
           this.product.name = product.name;
           this.product.category = product.category;
           this.product.image = product.image;
           this.product.price = product.price;
           this.product.show = product.show;
       },

       clearForm(){
            this.product.name = '',
            this.product.category = '',
            this.product.image = '',
            this.product.price = '',
            this.product.show = ''
            this.imageFile = null;
       }
        
    },

    computed:{
        //replaces products with filterd product to remain in it
        filteredProducts(){
            return this.products.filter((product) =>{
                //true or false for each product with match name
                return product.name.toLowerCase().match(this.searchProduct.toLowerCase());
            });
        }
    }

}
    //for add
  // fetch('api/product',{
            //     method:'post',
            //     body: JSON.stringify(this.product),
            //     headers: {
            //         'content-type':'application/json'
            //     }
            // })
            // .then(res => res.json())
            // .then(data =>{
            //     this.clearForm();
            //     alert('Product is saved');
            //     this.getProduct();
            // })
            // .catch(err => console.log(err));
     //    axios.post( 'api/product', {
            //        data: this.product
            //    }).then(res => {
            //        this.clearForm();
            //     alert('Product is saved');
            //     this.getProduct();
            //    }).catch( err => console.log(err));
     // axios.post('api/product',productData,config)
            // .then(res => {
            //    console.log('First stage is saved');
            //    this.clearForm();
            //     alert('Product is saved');
            //     this.getProduct();
            // //    this.addImage();
            // }).catch(err => console.log(err));
        
</script>
