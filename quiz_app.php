<?php

function evaluateQuiz(array $questions, array $answers): int{
    $score =0;

    for($i=0;$i<count($questions);$i++){
        if(strtolower($answers[$i])=== strtolower($questions[$i]['correct'])){
            $score++;
        }

    }

    return $score;



}

$questions=[['question'=> 'What is 73 + 89 ?','correct'=>'162'],
            ['question'=> 'What is the capital of Bangladesh ?','correct'=>'Dhaka'],
            ['question'=> 'How many districts in Bangladesh ?','correct'=>'64'],
            ['question'=> 'How many division in Bangladesh ?','correct'=>'8'],
];



