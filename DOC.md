<p align="center" style="font-size: 30px;">DOCUMENTAÇÃO SÓFOLHA<p>

&nbsp;

# Utilização do Input-mask

### Incluir no layout principal

```html
<script src="{{asset('js/jquery/jquery.js')}}"></script>
<script src="{{asset('js/jquery/jquery.mask.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

@stack('script')
```

### Incluir no layout do formulário

```html
@push('script')
    <script src="{{asset('js/input-mask.js')}}"></script>
@endpush
```

Documentação [jQuery Mask Plugin](https://igorescobar.github.io/jQuery-Mask-Plugin/docs.html).

&nbsp;

# Processo de implantação de produção

## 1 - Script npm

Minimiza todos os seus arquivos js/css para que estejam prontos para produção e sejam mais rápidos de serem lidos pelo sistema.

```
npm run prod
```

**Obs.:** Para retornar ao desenvolvimento utilize o camando Artisan
```
npm run dev
```
---
## 2 - Cache

### - Cache de configuração

Esse comando combinará todas as opções de configuração do seu aplicativo em um único arquivo que pode ser carregado mais rapidamente pela estrutura.

```
php artisan config:cache
```

### - Cache de rotas

Serializa todas as rotas da aplicação. Esses dados são passados para um único método em um arquivo cacheado. Isso diminui o tempo de carregamento das rotas da aplicação.

```
php artisan route:cache
```

**Obs.:** Para reverter o cache e voltar para desenvolvimento utilize os camandos
Artisan (Remove os arquivos de cache).
```
php artisan config:clear
php artisan route:clear
```