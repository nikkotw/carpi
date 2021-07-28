<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col col-sm-1">
        <b-button v-b-modal.modal-1>importar</b-button>

        <b-modal id="modal-1" title="Importar Datos Lepton" size="xs" @ok="importar()">
          <div class="row">
            <div class="col col-xl">
              <b-form-group
                label="materiales"
                label-for="name-input"
                invalid-feedback="Materiales es necesario"
                :state="nameState"
              >
                <b-form-input
                  id="name-input"
                  v-model="materiales"
                  :state="materialesState"
                  required
                ></b-form-input>
              </b-form-group>
            </div>
            <div class="col col-xl">
              <b-form-group
                label="Cantidades"
                label-for="name-input"
                invalid-feedback="Cantidades es necesario"
                :state="nameState"
              >
                <b-form-input
                  id="name-input"
                  v-model="cantidades"
                  :state="cantidadesState"
                  required
                ></b-form-input>
              </b-form-group>
            </div>
          </div>
        </b-modal>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col col-xl">
        <div class="accordion" role="tablist">
          <b-card no-body class="mb-1">
            <b-card-header header-tag="header" class="p-1" role="tab">
              <b-button block v-b-toggle.accordion-1 variant="info"
                >Datos internos</b-button
              >
            </b-card-header>
            <b-collapse
              id="accordion-1"
              accordion="my-accordion"
              role="tabpanel"
              visible
            >
              <b-card-body>
               <b-table
                id="table-transition-example"
                :items="detalleInterno"
                :fields="fieldsDetalleInterno"
                outlined
                small
                responsive
                hover
                fixed
                no-border-collapse
                head-variant="dark"
                :tbody-transition-props="{ name: 'fade' }"
              >
               </b-table>
              </b-card-body>
            </b-collapse>
          </b-card>
        </div>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col col-xl">
        <div class="accordion" role="tablist">
          <b-card no-body class="mb-1">
            <b-card-header header-tag="header" class="p-1" role="tab">
              <b-button block v-b-toggle.accordion-2 variant="info"
                >Datos Clientes</b-button
              >
            </b-card-header>
            <b-collapse
              id="accordion-2"
              
              accordion="my-accordion"
              role="tabpanel"
            >
              <b-card-body>
                <b-card-text
                  >I start opened because <code>visible</code> is
                  <code>true</code></b-card-text
                >
                <b-card-text>{{ text }}</b-card-text>
              </b-card-body>
            </b-collapse>
          </b-card>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return {
            materiales:any,
            cantidades:any,

        }
    },
  mounted() {
    console.log("Component mounted.");
  },
  methods:{
      importar(){
          this.materiales=this.materiales.split(' ');
          this.cantidades = this.cantidades.split(' ');
          console.log(this.materiales);
          console.log(this.cantidades);
      }
  }
};
</script>
