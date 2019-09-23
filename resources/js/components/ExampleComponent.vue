<template>
  <v-toolbar dense fixed app>
        <v-menu bottom left>
              <template v-slot:activator="{ on }">
                <v-btn icon v-on="on" >
                  <v-app-bar-nav-icon></v-app-bar-nav-icon>
                </v-btn>
              </template>
  
              <v-list>
                <v-list-item v-for="(item, i) in items" :key="i" >
                  <!--@click="" -->
                  <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item>
              </v-list>
        </v-menu>

        <v-toolbar-title>Arquetipos</v-toolbar-title>
        <div class="flex-grow-1"></div>
        <v-spacer></v-spacer>
        <v-btn icon> <v-icon>mdi-magnify</v-icon> </v-btn>
        <v-btn icon> <v-icon>mdi-heart</v-icon> </v-btn>
        <v-btn icon> <v-icon>mdi-dots-vertical</v-icon></v-btn>
      </v-toolbar>
</template>

<script>
  import '../app.js';
    export default { 
        data: () => ({
      list : 0,
      items: [
        { title: 'Crear Arquetipo' },
        { title: 'Editar Arquetipo' },
        { title: 'Importar Arquetipo' },
        { title: 'Exportar Arquetipo' },
      ],
    }),
    }
</script>

<style lang="scss">
    @import '../../../node_modules/vuetify/src/styles/main';
</style>

