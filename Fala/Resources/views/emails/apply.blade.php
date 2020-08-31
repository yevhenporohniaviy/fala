<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        padding: 5px;
        text-align: left;
    }
</style>
<body>
<h2>
    {!! __('theme::emails.apply_title') !!}
</h2>
<table style="width:100%">
    @foreach($applicantForm->getActiveFields() as $field)
        <tr>
            @if($field['name'] !== 'cv_file' && !empty($form[$field['name']]))
                <th>{{ $field['label'][$locale] }}:</th>
                <td>{{ $form[$field['name']] }}</td>
            @else
                <th>{{ __('theme::emails.apply_cv') }}:</th>
                <td><a href="{{ url($form['cv_link']) }}" target="_blank">{{ __('theme::emails.apply_attachment') }}</a></td>
            @endif
        </tr>
    @endforeach
</table>
<p>
    {!! __('theme::emails.apply_thank_you') !!}
</p>
</body>
