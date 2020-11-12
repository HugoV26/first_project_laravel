<template>
    <div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">{{post.title}}</h5>
        <button type="button" @click="clean" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{post.content}}
      </div>
      
    </div>
  </div>
</div>
</template>

<script>
export default {
    props: ["post"],  //Es una propiedad que podemos pasar entre componentes para pasar datos
    created(){
        console.log("Modal created");
        //setTimeout(function(){
         //   $("#postModal").modal("show")
         //   }, 4000);
        
    },
    methods: {
        clean: function(){
            this.$emit('closeModalPost');
        }
    },
    watch: {
        post: function(newVal, oldVal) {
            //console.log("post - watch")
            if(typeof(newVal) == 'object')
              $("#postModal").modal("show");
        }
    },
};  
</script>