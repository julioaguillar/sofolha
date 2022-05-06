<style>
    .title {
        padding: 52px 48px;
        margin-top: 10px;
        /* background-color: rgb(16, 71, 120); */
        /* color: white; */
        font-size: 1.875rem;
        /* 30px */
        line-height: 2.25rem;
        /* 36px */
    }

    .texto {
        font-size: 1.125rem;
        /* 18px */
        line-height: 1.75rem;
        /* 28px */
        font-weight: 400;
    }

</style>

<div>
    <h2 class="title">Você recebeu um novo contato</h2>

    <p class="texto">
        <strong>Nome:</strong> {{ $data['nome'] }}
    </p>
    <p class="texto">
        <strong>Email:</strong> {{ $data['email'] }}
    </p>
    <p class="texto">
        <strong>Mensagem:</strong> {{ $data['mensagem'] }}
    </p>
</div>
