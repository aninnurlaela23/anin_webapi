<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test Api</div>


                    <div 
                    v-if="loading ===false"
                    class="card-body">
                        Contoh Hasil pemanggilan endpoin api
                        <P>Response: </P>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jk</th>
                                    <th>Dibuat pada</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr v-for="item in data":key="item.id">
                                    <td>{{ item.nama}}</td>
                                    <td>{{item.Jk}}</td>
                                    <td>{{item.created_at}}</td>
                                </tr>
                            </tbody>
                        </table>
                        {{ data }}
                        {{error}}
                    </div>
                    <div
                        v-else
                        class="card-body">
                        loading....
                        </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
     export default {
        data(){
            return{
                data:[],
                error:null,
                loading:false
            }
        },
        mounted() { 
        this.getData()
        },

        methods: {
            getData(){
                axios.get('/testapi')
                .then((res)=>{//2
                    this.data = res.data.data
                    this.loading = false
                    })
                .catch((error)=>{//3
                    this.error = error.message
                    this.loading = false
                    })

            }
        }
    }
</script>
