@extends('layouts.siteCliente')

@section('conteudo')

    <div class="container">
        <h2>Editar Perfil</h2>
        <form>
            @csrf
            <div class="form-group">
                <div class="form-row">

                <div class="form-group">
                    <label for="Nome">Nome:</label>
                    <input type="text" class="form-control" id="name" placeholder="Nome" name="nome">
                </div>
                <div class="form-group">
                    <label for="Nome">Sobrenome:</label>
                    <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome">
                </div>
                    <div class="form-group">
                        <label for="Nome">Foto:</label>
                        <figure class="image is-96x96 is-pulled-left" style="z-index: 0">
                            <img width="96" height="96" v-if="selectFile === null && url === null" src={{ asset("Imagens/perfil.png")}}>
                            <img v-else-if="url != null" :src="url"/>
                            {{--                        <img v-else :src="'../images/usuarios/tmp/usuarios/'+item.email+'/'+item.foto"/>                                        <img src="">--}}
                        </figure>
                        <div class="field " style="z-index: 0">
                            <div class="file is-primary ">
                                <label class="file-label b-pt-md b-ml-md">
                                    <input class="file-input" v-on:click="onFileChanged" type="file" name="image" id="foto">
                                </label>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="pswd">
            </div>

            <div>
                <label for="Telefone">Telefone:</label>
                <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone" ><br>
            </div>

            <div>
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" ><br>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://unpkg.com/vue"></script>

    <script type="text/javascript">
        $("#telefone").mask("(00) 0000-0000");
        $("#cpf").mask("000.000.000-00");


        var app2 = new Vue({

            data() {
                return {
                    selectFile: null,
                    url: null
                }
            },
            methods: {

                onFileChanged:function() {
                    alert("AQUI");
                    this.selectFile = $("foto").val();
                    this.url = URL.createObjectURL(this.selectFile);
                    console.log(this.url);

                }
            }
        })








    </script>


@endsection
