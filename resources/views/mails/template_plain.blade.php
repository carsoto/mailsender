Hello {{ $template->receiver }},
This is a demo email for testing purposes! Also, it's the HTML version.
 
Demo object values:
 
Demo One: {{ $template->demo_one }}
Demo Two: {{ $template->demo_two }}
 
Values passed by With method:
 
testVarOne: {{ $testVarOne }}
testVarOne: {{ $testVarOne }}
 
Thank You,
{{ $template->sender }}