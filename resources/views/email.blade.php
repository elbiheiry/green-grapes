<x-mail::message>
    رسالة جديدة من موقع العنب الأخضر

    {{-- Please use this code to reset your password: {{ $details['code'] }} --}}
    هذه رسالة جديدة بخصوص {{ $details['subject'] }} من {{ $details['name'] }}. الرجاء التواصل معه على الرقم
    {{ $details['phone'] }}
    أو البريد الإلكتروني {{ $details['email'] }}.
    {!! $details['message'] !!}
    مع جزيل الشكر,
    {{ config('app.name') }}
</x-mail::message>
