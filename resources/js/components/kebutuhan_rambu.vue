<template>
<div>
  
     <table class="table table-hover">
                        <thead>
                           <th>Nama Rambu</th>
                           <th>Alamat</th>
                           <th>kelurahan</th>
                           <th class="text-center">Action</th>
                        </thead>
                        <tbody>
                            <tr v-for="kebutuhanrambu in kebutuhanrambus" >
                                 <td>{{kebutuhanrambu.rambu.nama_rambu}}</td>
                                 <td>{{kebutuhanrambu.kelurahan.nama_kelurahan}}</td>
                                 <td>{{kebutuhanrambu.alamat}}</td>

                                <td class="text-center">
                                    <button class="button btn btn-sm btn-secondary" title="detail"> <i class="fa fa-eye"></i></button>
                                    <button class="button btn btn-sm btn-info   " title="edit"><i class="fa fa-edit"></i></button>
                                    <button class="button btn btn-sm btn-danger" title="hapus" onclick="return confirm('Anda yakin akan menghapus data ?')"><i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>


</div>

</template>
<script>
   export default {
        data: function() { 
            return {
              kebutuhanrambus:[]
            }
        },
         mounted() {
         this.viewkebutuhan();
        },
        methods: {
           viewkebutuhan(){            
               axios({
                   method: 'get',
                   url:'/lokasi/kebutuhan_rambu/api',
               }).then((response)=>{
                  this.kebutuhanrambus = response.data
               })
            }
           
        }
          
        
     
    }
</script>
