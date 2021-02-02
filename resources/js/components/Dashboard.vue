<template>

    <div class="container">
        <h3 class="center">Lista de Clientes</h3>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Criado em</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody v-for="item in user">
                <tr>
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.Id_cities }}</td>
                    <td>{{ item.created_at }}</td>
                    <td>
                        <a class="btn deep-orange" href="admin/clients/editar"+item.id>Editar</a>
                        <a class="btn red" href="admin/clients/deletar"+item.id>Deletar</a>
                        <a class="btn blue" href="/admin/clients/adicionar">Adicionar</a>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="/admin/clients/adicionar">Adicionar</a>
        </div>

    </div>

</template>
<script>
    export default {
        // props: ['user'],
        mounted() {
            // console.log(this.user);
            // alert(this.user);
        },
        methods: {
            // gerenciarempresa: function (idus){
            //     window.open('gerenciarempresas/'+idus, '_self');
            // }
        },
    }
</script>
