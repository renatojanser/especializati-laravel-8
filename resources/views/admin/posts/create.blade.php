<h1>Cadastra novo post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" id="title" placeholder="Título">
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteúdp"></textarea>

    <button type="submit">Enviar</button>
</form>
