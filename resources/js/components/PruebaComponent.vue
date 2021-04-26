
<template>

  <div>
      <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#colapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
    Bancos
  </a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapse2" aria-expanded="false" aria-controls="collapseExample">
    Clientes
  </button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#colapse3" aria-expanded="false" aria-controls="collapseExample">
    Cuentas
  </button>
</p>
<!-- Bancos -->
<div class="collapse" id="colapse1">
  <div class="card card-body">
       <span>
      <img
        src="/img/img-educar.jpg"
        style="width: 100px; margin-bottom: 7px"
      />
    </span>

     <div class="title-ans">
        <span style="margin: 10px; font-size: 20px"
          >Lista de bancos</span
        >
      </div>
<br>
<!-- Button to Open the Modal -->
<button @click="modificar=false; abrirModalBanco()" type="button" class="btn btn-primary btn-sm my-4">
  Nuevo banco
</button>
<br>
<!-- The Modal -->
<div class="modal" :class="{mostrar:modal}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button  @click="cerrarModalBanco();" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="my-4">
          <label for="">Nombre banco</label>
          <input v-model="banco.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre banco">
        </div>
        <div>
          <label for="">Dirección</label>
          <input v-model="banco.direccion" type="text" class="form-control" id="nombre" placeholder="Dirección">
        </div>
          <div>
          <label for="">Teléfono</label>
          <input v-model="banco.telefono" type="text" class="form-control" id="nombre" placeholder="Teléfono">
        </div>
      </div>

      <!-- Modal footer -->
    <div  class="modal-footer">
        <button @click="guardarBanco();" type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
        <button @click="cerrarModalBanco();" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>

    </div>
  </div>
</div>
<!-- Tabla bancos -->
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Teléfono</th>
        <th scope="col" colspan="2" class="text-center">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="banco in bancos" :key="banco.id">
      <th scope="row">{{ banco.id}}</th>
      <td>{{banco.nombre}}</td>
      <td>{{banco.direccion}}</td>
      <td>{{banco.telefono}}</td>
      <td> <button  @click="modificar=true; abrirModalBanco(banco);" class="btn btn-success btn-sm">Editar</button></td>
      <td> <button @click="eliminarBancos(banco.id)" class="btn btn-danger btn-sm">Eliminar</button></td>

    </tr>
  </tbody>
</table>
</div>
</div>
<!--------------------------------------------------------------------- Clientes------------------------------------------------------------------- -->
<div class="collapse" id="colapse2">
  <div class="card card-body">
   <span>
      <img
        src="/img/img-educar.jpg"
        style="width: 100px; margin-bottom: 7px"
      />
    </span>

     <div class="title-ans">
        <span style="margin: 10px; font-size: 20px"
          >Lista de clientes</span
        >
      </div>
<br>
<!-- Button to Open the Modal -->
<button @click="modificar=false; abrirModalCliente()" type="button" class="btn btn-primary btn-sm my-4">
  Nuevo cliente
</button>
<br>
<!-- The Modal -->
<div class="modal" :class="{mostrar:modal}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button  @click="cerrarModalCliente();" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="my-4">
          <label for="">Nombre cliente</label>
          <input v-model="cliente.nombre" type="text" class="form-control" id="nombre" placeholder="Nombre cliente">
        </div>
        <div>
          <label for="">Dirección</label>
          <input v-model="cliente.direccion" type="text" class="form-control" id="nombre" placeholder="Dirección">
        </div>
          <div>
          <label for="">Teléfono</label>
          <input v-model="cliente.telefono" type="text" class="form-control" id="nombre" placeholder="Teléfono">
        </div>


      </div>

      <!-- Modal footer -->
    <div  class="modal-footer">
        <button @click="guardarCliente();" type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
        <button @click="cerrarModalCliente();" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>

    </div>
  </div>
</div>
<!-- Tabla clientess -->
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Cúenta : saldo</th>
      <th scope="col" colspan="2" class="text-center">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="cliente in clientes" :key="cliente.id">
      <th scope="row">{{ cliente.id}}</th>
      <td>{{cliente.nombre}}</td>
      <td>{{cliente.direccion}}</td>
      <td>{{cliente.telefono}}</td>
      <div for="Cuenta">

        <tr
            v-for="(dato, index) in cliente.cuenta"
            :key="index"
        >
            <td class="col-md-3">
                <span>{{
                    dato.numero
                }} : {{dato.saldo}}</span>
            </td>
        </tr>
      </div>

      <td> <button  @click="modificar=true; abrirModalCliente(cliente);" class="btn btn-success btn-sm">Editar</button></td>
      <td> <button @click="eliminarClientes(cliente.id)" class="btn btn-danger btn-sm">Eliminar</button></td>

    </tr>
  </tbody>
</table>
    </div>
</div>

<!--------------------------------------------------------------------- Cuentas------------------------------------------------------------------- -->
<div class="collapse" id="colapse3">
  <div class="card card-body">
   <span>
      <img
        src="/img/img-educar.jpg"
        style="width: 100px; margin-bottom: 7px"
      />
    </span>

     <div class="title-ans">
        <span style="margin: 10px; font-size: 20px"
          >Lista de cuentas</span
        >
      </div>
<br>
<!-- Button to Open the Modal -->
<button @click="modificar=false; abrirModalCuenta()" type="button" class="btn btn-primary btn-sm my-4">
  Nueva cuenta
</button>
<br>
<!-- The Modal -->
<div class="modal" :class="{mostrar:modal}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button  @click="cerrarModalCuenta();" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="my-4">
          <label for="">Numero</label>
          <input v-model="cuenta2.numero" type="text" class="form-control" id="nombre" placeholder="Número">
        </div>
        <div>
          <label for="">Saldo</label>
          <input v-model="cuenta2.saldo" type="text" class="form-control" id="nombre" placeholder="Saldo">
        </div>
          <div>
          <label for="">Cliente</label>
          <select v-model="cuenta2.id_cliente" type="text" class="form-control" id="nombre" placeholder="Cliente">
                <option v-for="(cliente, index) in clientes" :key="index"  :value="cliente.id">{{cliente.nombre}}</option>
           </select>
        </div>
         <div>
          <label for="">Banco</label>
          <select v-model="cuenta2.id_banco" type="text" class="form-control" id="nombre" placeholder="Banco">
                <option v-for="(banco, index) in bancos" :key="index"  :value="banco.id">{{banco.nombre}}</option>
           </select>
        </div>

      </div>

      <!-- Modal footer -->
    <div  class="modal-footer">
        <button @click="guardarCuenta();" type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
        <button @click="cerrarModalCuenta();" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>

    </div>
  </div>
</div>

<!-- Transferir -->

<!-- The Modal -->
<div class="modal" :class="{mostrar:modal}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button  @click="cerrarModalCuenta();" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="my-4">
        <div class="my-4">
          <label for="">Id</label>
          <input v-model="cuenta2.id" type="text" class="form-control" id="nombre" placeholder="id">
        </div>
          <label for="">Numero</label>
          <input v-model="cuenta2.numero" type="text" class="form-control" id="nombre" placeholder="Número">
        </div>
        <div>
          <label for="">Saldo</label>
          <input v-model="cuenta2.saldo" type="text" class="form-control" id="nombre" placeholder="Saldo">
        </div>
          <div>
          <label for="">Cliente</label>
          <select v-model="cuenta2.id_cliente" type="text" class="form-control" id="nombre" placeholder="Cliente">
                <option v-for="(cliente, index) in clientes" :key="index"  :value="cliente.id">{{cliente.nombre}}</option>
           </select>
        </div>
         <div>
          <label for="">Banco</label>
          <select v-model="cuenta2.id_banco" type="text" class="form-control" id="nombre" placeholder="Banco">
                <option v-for="(banco, index) in bancos" :key="index"  :value="banco.id">{{banco.nombre}}</option>
           </select>
        </div>

      </div>

      <!-- Modal footer -->
    <div  class="modal-footer">
        <button @click="guardarCuenta();" type="button" class="btn btn-success" data-dismiss="modal">Guardar</button>
        <button @click="cerrarModalCuenta();" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>

    </div>
  </div>
</div>
<!-- Tabla cuentas -->
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Saldo</th>
      <th scope="col">Cliente</th>
      <th scope="col">Banco</th>
      <th scope="col" colspan="2" class="text-center">Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="cuenta in cuentas" :key="cuenta.id">
      <th scope="row">{{ cuenta.numero}}</th>
      <td>{{cuenta.saldo}}</td>
      <td>{{cuenta.cliente.nombre}}</td>
      <td>{{cuenta.banco.nombre}}</td>

      <td> <button  @click="modificar=true; abrirModalCuenta(cuenta);" class="btn btn-success btn-sm">Editar</button></td>
      <td> <button  @click="modificar=true; agregarSaldoModalCuenta(cuenta);" class="btn btn-success btn-sm">+</button></td>
      <!-- <td> <button @click="eliminarCuenta(cuenta.id)" class="btn btn-danger btn-sm">Eliminar</button></td> -->

    </tr>
  </tbody>
</table>
    </div>
</div>


</div>
</template>

<script>
  export default {
    data() {
      return {
        cuenta:{},
        id:0,
        banco:{
            nombre:'',
            direccion:'',
            telefono:''
        },
        cliente:{
            nombre:'',
            direccion:'',
            telefono:''
        },
        cuenta2:{
            id:'',
            numero:'',
            saldo:'',
            id_cliente:'',
            id_banco:''
        },
        modificar:true,
        modal:0,

        bancos:[],
        clientes:[],
        cuentas:[],
      }
    },
    created(){
        this.listarBancos();
        this.listarClientes();
        this.listarCuentas();
    },
    methods: {
        // Banco
        async listarBancos(){
          const  res = await axios.get('/banco');
            this.bancos = res.data;
        },

         async guardarBanco(){
         if(this.modificar){
                const res=await axios.put('/banco/' + this.id, this.banco);
                 this.cerrarModalBanco();
         this.listarBancos();

         }else{
             const res=await axios.post('/banco/', this.banco);
         }
         this.cerrarModalBanco();
         this.listarBancos();
        },

        async eliminarBancos(id){
          const  res = await axios.delete('/banco/'+id);
           this.listarBancos();
        },
        abrirModalBanco(data={}){
            this.modal=1;
            if(this.modificar){
                this.id=data.id,
                this.banco.nombre=data.nombre;
                this.banco.direccion=data.direccion;
                this.banco.telefono=data.telefono;
            }else{
                this.id=0,
                this.banco.nombre='';
                this.banco.direccion='';
                this.banco.telefono='';
            }
        },
        cerrarModalBanco(){
            this.modal=0;
        },

        // Cliente

        async listarClientes(){
          const  res = await axios.get('/cliente');
            this.clientes = res.data;
            this.cuenta = this.clientes[0].cuenta;
            console.log(this.cuenta);
        },

         async guardarCliente(){
         if(this.modificar){
                const res=await axios.put('/cliente/' + this.id, this.cliente);
                 this.cerrarModalCliente();
         this.listarClientes();

         }else{
             const res=await axios.post('/cliente/', this.cliente);
         }
         this.cerrarModalCliente();
         this.listarClientes();
        },

        async eliminarClientes(id){
          const  res = await axios.delete('/cliente/'+id);
           this.listarClientes();
        },
        abrirModalCliente(data={}){
            this.modal=1;
            if(this.modificar){
                this.id=data.id,
                this.cliente.nombre=data.nombre;
                this.cliente.direccion=data.direccion;
                this.cliente.telefono=data.telefono;
            }else{
                this.id=0,
                this.cliente.nombre='';
                this.cliente.direccion='';
                this.cliente.telefono='';
            }
        },
        cerrarModalCliente(){
            this.modal=0;
        },

 // Cuentas

        async listarCuentas(){
          const  res = await axios.get('/cuenta');
            this.cuentas = res.data;

            console.log('Cuentas:',this.cuenta);
        },

         async guardarCuenta(){
         if(this.modificar){
                const res=await axios.put('/cuenta/' + this.id, this.cuenta2);
                this.cerrarModalCuenta();
                this.listarCuentas();

         }else{
             const res=await axios.post('/cuenta/', this.cuenta2);
         }
         this.cerrarModalCuenta();
         this.listarCuentas();
        },

        async eliminarCuenta(id){
          const  res = await axios.delete('/cuenta/'+id);
           this.listarCuentas();
        },
        abrirModalCuenta(data={}){
            this.modal=1;
            if(this.modificar){
                this.cuenta2.id=data.id,
                this.cuenta2.numero=data.numero;
                this.cuenta2.saldo=data.saldo;
                this.cuenta2.id_cliente=data.id_cliente;
                this.cuenta2.id_banco=data.id_banco;
            }else{
                this.id=0,
                this.cuenta2.numero='';
                this.cuenta2.saldo='';
                this.cuenta2.id_cliente='';
                this.cuenta2.id_banco='';
            }
        },
        cerrarModalCuenta(){
            this.modal=0;
        },
        agregarSaldoModalCuenta(data={}){
        this.modal=1;
        if(this.modificar){
            this.cuenta2.id=data.id,
            this.cuenta2.numero=data.numero;
            this.cuenta2.saldo=data.saldo;
            this.cuenta2.id_cliente=data.id_cliente;
            this.cuenta2.id_banco=data.id_banco;
        }else{
            this.id=0,
            this.cuenta2.numero='';
            this.cuenta2.saldo='';
            this.cuenta2.id_cliente='';
            this.cuenta2.id_banco='';
        }
        },

    }
  }
</script>
<style>
.mostrar{
    display: list-item;
    opacity: 1;
    background: rgb(44, 38, 75, 0.849)
}
body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial,
    sans-serif;
}
.error--error {
  border-color: red;
}
.error-input {
  color: red;
  font-weight: bold;
}
.title-ans {
  color: white;
  background-color: #2392ad;
}
input[type="file"] {
  position: absolute;
  top: -1000px;
}

div.file-listing {
  width: 200px;
}

span.remove-file {
  color: rgb(199, 71, 142);
  cursor: pointer;
  float: right;
}
.boton_personalizado {
  text-decoration: none;
  padding: 10px;
  font-weight: 600;
  font-size: 10px;
  color: #ffffff;
  background-color: #1883ba;
  border-radius: 6px;
}
.boton_personalizado:hover {
  color: #1883ba;
  background-color: #f9fafc;
}
</style>
