@component('mail::message')

# Olá!

@if (!empty($actionText))
Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.

@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent

Este link de redefinição de senha expirará em 60 minutos.
@else
Mensagem genérica de notificação.
@endif

Se você não solicitou essa ação, nenhuma outra ação será necessária.

Cumprimentos,  
{{ config('app.name') }}

@endcomponent
