

        <div class="form-group">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" id="name" placeholder="Nome" name="name">
        </div>
        <div class="form-group">
            <div class="form-group">
                <div class="input-field col s12">
                    <select name="Id_cities" id="Id_cities">

                        <option value="" disabled selected>Selecione uma cidade</option>
                        @foreach($cidades as $cidade)
                            <option value="{{$cidade->id}}">{{$cidade->name}}</option>
                        @endforeach
                    </select>
                    <label>Cidade</label>
                </div>
            </div>
        </div>

