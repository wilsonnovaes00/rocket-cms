@extends('admin.users.index')

@section('title', 'Editar | Usuário ', @parent)

@section('actions')
	<a href="{{ route('admin.users.list') }}" class="btn btn-default"><i class="fa fa-angle-left"></i> Voltar</a>
@endsection

@section('users')
    
    @section('subtitle', 'Editar usuário')

    <div class="tabs-container">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab-dados"> Dados</a></li>
            <li class=""><a data-toggle="tab" href="#tab-imagem"> Imagem</a></li>
        </ul>

        <form action="{{ route('admin.users.update',$user->id) }}" method="post">
            <div class="tab-content">
                <div id="tab-dados" class="tab-pane active">
                    <div class="panel-body">
                        {{ csrf_field() }}
                        <fieldset class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nome:</label>
                                <div class="col-sm-10"><input type="text" name="name" class="form-control" placeholder="Nome" value="{{ $user->name }}"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">E-mail:</label>
                                <div class="col-sm-10"><input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ $user->email }}"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Senha:</label>
                                <div class="col-sm-10"><input type="password" name="password" class="form-control" placeholder="Senha"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status:</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                        <option value="1" {{ $user->status === 1 ? 'selected' : '' }}>Ativo</option>
                                        <option value="0" {{ $user->status === 0 ? 'selected' : '' }}>Inativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10"><button type="submit" class="btn btn-primary">Salvar</button></div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div id="tab-imagem" class="tab-pane">
                    <div class="panel-body">
                        <h3>Gravatar</h3>
                        <p>Seu Gravatar é uma imagem que segue você de site à site aparecendo ao lado do seu nome quando você faz coisas como um comentário ou post em um blog. Os avatares ajudam a identificar os seus posts em blogs e fóruns na web, então porque não em qualquer site?</p>
                        <a href="https://br.gravatar.com/" target="_blank" class="btn btn-primary">Crie seu gravatar <i class="fa fa-external-link"></i></a>
                    </div>
                </div>
            </div>
        </form>
        
    </div>

@endsection