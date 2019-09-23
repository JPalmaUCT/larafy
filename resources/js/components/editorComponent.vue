<template>
    <v-app light>
        <section>
            <v-layout column align-left justify-left class="white--text" >
            <v-btn class="mt-12" color="blue lighten-2" dark large href="" > Importar</v-btn>
          </v-layout>
        </section>
        <section>
            <form action="/process" enctype="multipart/form-data" method="POST">
            <p>
                <label for="xmlfile">
                <input type="file" name="xmlfile" id="xmlfile">
                </label>
            </p>
            <button>Upload</button>
            {{ csrf_field() }}
        </form>
        </section>
    </v-app>
</template>

<style lang="scss">
    @import '../../../node_modules/vuetify/src/styles/main';
</style>
