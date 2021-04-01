<template>
  <button class="btn btn-outline-danger" @click="confirm">Eliminar</button>
</template>

<script>

export default {
  props: {
    value: String,
  },
  methods: {
    
    confirm() {
      this.$swal.fire({
        title: "Deseas eliminar esta receta?",
        text: "Una vez eliminada no podrás recuperarla!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, eliminar",
      }).then((result) => {
        if (result.isConfirmed) {
               axios.delete(`recetas/${this.value}`)
          .then(()=>{
                 window.location.reload(); 
          }).catch(()=>{
             this.$swal.fire("Errorr!", "La receta no pudo ser eliminar", "warning");
          })
        }
      }).catch((e)=>{
          console.log(e)
      })
    },
  }

};
</script>