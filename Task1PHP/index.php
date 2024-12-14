<?php
#task1
echo (int)(15.2 + 14.7) + (int)(10.5 + 10.5)."\n"; // 50
echo gettype((int)(15.2 + 14.7) + (int)(10.5 + 10.5))."\n"; // integer



#task2
echo gettype(100)."\n";
echo var_dump(100)."\n";
echo get_debug_type(100)."\n";



#task3
echo "Hello 'Elzero' \\\\ \"\" \"We Love\" \"\$\$PHP\"" ."\n";



#task4
echo nl2br( "We
Love
Elzero
Web
School")."\n";



#task5
echo <<<'now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now ."\n";



#task6
$something = "Programming";
echo <<<"code"
Hello \PHP\ We Love $something
code."\n";



#task7
echo (bool)"Hello PHP"."\n";
echo gettype((int)"Hello PHP")."\n";




#task8
print_r([
    "frontend"=>[
        "html",
        "css",
        "js"=>[
            "Vuejs"=>[2 =>"v2",1 =>"v3"],
            0 => "Reactjs",
            1 => "Svelte"
        ]
    ],
    "backend"=>[
        "php",
        "mysql",
        "security"
    ],
    0 =>"git",
    1 =>"github",
    "testing"=>[

        "Unit Testing ",
        "End To End" ,
        "Integration"
    ]

]);
