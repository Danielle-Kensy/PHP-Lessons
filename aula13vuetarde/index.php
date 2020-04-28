<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exemplo VUE.js Tarde</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Exemplo VueJS Tarde</h1>

        <h2>Danielle Oliveira</h2>

        <div id="app">
            <h1>{{name}} {{lastName}}</h1>
            <h1>{{fullName}}</h1>

            <h1>Quantidade: {{quantity}}</h1>
            <button v-on:click="add">Adicionar</button>
            <button v-on:click="sub" v-show="quantity>0">Remover</button>

            <h1>Notas</h1>
            <h2 v-show="situation">Aluno Matriculado</h2>
            <h2>Nota 1: {{grade1}}</h2>
            <h2>Nota 2: {{grade2}}</h2>
            <h2>Média : {{average}}</h2>
            <h3 v-if="average>=9 && average<=10">Conceito A</h3>
            <h3 v-else-if="average>=8 && average<=9">Conceito B</h3>
            <h3 v-else-if="average>=6 && average<=8">Conceito C</h3>
            <h3 v-else="">Conceito D</h3>

            <h1>Linguagens Que Progama</h1>
            <ul>
                <li v-for="language in languages">{{language}}</li>
            </ul>

            <h1>Pessoa</h1>
            <div v-for="person in people" :key="person.id">
                <hr>
                <figure>
                    <img v-bind:src="person.image" width="90" height="90" v-bind:alt="person.imageDescription"/>
                </figure>
                <h1>{{person.name}}</h1>
                <h2>{{person.email}}</h2>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="main.js"></script>
    </body>
</html>
