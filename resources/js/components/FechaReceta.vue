<template>
    <div>
        <span> {{fomatearFecha}} </span>
    </div>
</template>


<script>
export default {
    props:{
        date: String
    },
    computed:{
        fomatearFecha(){
            return moment(this.date).locale('es').format('DD [de] MMMM [del] YYYY');
        }
    }
}
</script>