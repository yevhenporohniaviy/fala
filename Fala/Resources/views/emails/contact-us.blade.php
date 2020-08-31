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
    New Contact us
</h2>
<table style="width:100%">
    @foreach($contactForm->getActiveFields() as $field)
        <tr>
            <th>{{ $field['label'][$locale] }}</th>
            <td>{{ $form[$field['name']] }}</td>
        </tr>
    @endforeach
</table>
<p>
    Thank You
    {{ $seo['company_name'] }}
</p>
</body>
